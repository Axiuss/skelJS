<section id="config" class="main container">
	<h2>Configuration Reference</h2>
	<section class="sub">
		<h3>Options</h3>
		<dl class="default">
			<dt id="setup-options-prefix">prefix</dt>
			<dd>
				<table>
					<tr>
						<th>Type</th>
						<td>String</td>
					</tr>
					<tr>
						<th>Default</th>
						<td><em>null</em> (Disables stylesheet management)</td>
					</tr>
				</table>
				<p>Sets the stylesheet prefix. If set, skel.js will use this to figure out the names of your global and
				breakpoint stylesheets. For example, setting it to <em>"style"</em> with the following breakpoints configured:</p>
				<ul class="default">
					<li><strong>wide</strong></li>
					<li><strong>narrow</strong></li>
					<li><strong>narrow960</strong></li>
					<li><strong>narrow720</strong></li>
					<li><strong>narrow480</strong></li>
				</ul>
				<p>will result in skel.js looking for these stylesheets:</p>
				<ul class="default">
					<li><em>style.css</em> &ndash; global stylesheet (always applies)</li>
					<li><em>style-wide.css</em> &ndash; applies when <strong>wide</strong> is active</li>
					<li><em>style-narrow.css</em> &ndash; applies when <strong>narrow</strong> is active</li>
					<li><em>style-narrow960.css</em> &ndash; applies when <strong>narrow960</strong> is active</li>
					<li><em>style-narrow720.css</em> &ndash; applies when <strong>narrow720</strong> is active</li>
					<li><em>style-narrow480.css</em> &ndash; applies when <strong>narrow480</strong> is active</li>
				</ul>
				<p>A prefix can also include a path name. For example, setting it to <em>"/assets/css/style"</em> with the same breakpoints as above results in:</p>
				<ul class="default">
					<li><em>/assets/css/style.css</em> &ndash; global stylesheet (always applies)</li>
					<li><em>/assets/css/style-wide.css</em> &ndash; applies when <strong>wide</strong> is active</li>
					<li><em>/assets/css/style-narrow.css</em> &ndash; applies when <strong>narrow</strong> is active</li>
					<li><em>/assets/css/style-narrow960.css</em> &ndash; applies when <strong>narrow960</strong> is active</li>
					<li><em>/assets/css/style-narrow720.css</em> &ndash; applies when <strong>narrow720</strong> is active</li>
					<li><em>/assets/css/style-narrow480.css</em> &ndash; applies when <strong>narrow480</strong> is active</li>
				</ul>
				<p>Setting prefix to <em>null</em> (the default) disables stylesheet management entirely.</p>
			</dd>
			<dt>preloadStyleSheets</dt>
			<dd>
				<table>
					<tr>
						<th>Type</th>
						<td>Boolean</td>
					</tr>
					<tr>
						<th>Default</th>
						<td><em>false</em></td>
					</tr>
				</table>
				<p>By default, skel.js will dynamically load breakpoint stylesheets only when it needs them.
				Setting this option to <em>true</em> will instead preload them all ahead of time (= same behavior as CSS media queries).</p>
			</dd>
			<dt>pollOnce</dt>
			<dd>
				<table>
					<tr>
						<th>Type</th>
						<td>Boolean</td>
					</tr>
					<tr>
						<th>Default</th>
						<td><em>false</em></td>
					</tr>
				</table>
				<p>If <em>true</em>, breakpoint checks will only be performed the first time the page is loaded, disabling
				the ability to switch breakpoints by resizing the viewport.</p>
			</dd>
			<dt>resetCSS</dt>
			<dd>
				<table>
					<tr>
						<th>Type</th>
						<td>Boolean</td>
					</tr>
					<tr>
						<th>Default</th>
						<td><em>false</em></td>
					</tr>
				</table>
				<p>If <em>true</em>, browser CSS will be reset using Erik Meyer's <a href="http://meyerweb.com/eric/tools/css/reset/">CSS resets</a>.</p>
			</dd>
			<dt>normalizeCSS</dt>
			<dd>
				<table>
					<tr>
						<th>Type</th>
						<td>Boolean</td>
					</tr>
					<tr>
						<th>Default</th>
						<td><em>false</em></td>
					</tr>
				</table>
				<p>If <em>true</em>, browser CSS will be normalized using <a href="http://necolas.github.io/normalize.css/">normalize.css</a>.</p>
			</dd>
			<dt>boxModel</dt>
			<dd>
				<table>
					<tr>
						<th>Type</th>
						<td>String</td>
					</tr>
					<tr>
						<th>Default</th>
						<td><em>null</em></td>
					</tr>
				</table>
				<p>Sets the global CSS box model. Can be <em>"border"</em>, <em>"content"</em>, <em>"margin"</em>, or <em>"padding"</em>.</p>
			</dd>
			<dt>useOrientation</dt>
			<dd>
				<table>
					<tr>
						<th>Type</th>
						<td>Boolean</td>
					</tr>
					<tr>
						<th>Default</th>
						<td><em>false</em></td>
					</tr>
				</table>
				<p>For simplicity, skel.js ignores device orientation (where applicable) and assumes it's being
				used in portrait mode (resulting in the same viewport width regardless of actual orientation). Setting this to <em>true</em>,
				however, tells it to acknowledge device orientation when calculating the viewport width (resulting in different
				widths for landscape and portrait modes).</p>
			</dd>
			<dt>containers</dt>
			<dd>
				<table>
					<tr>
						<th>Type</th>
						<td>Integer</td>
					</tr>
					<tr>
						<th>Default</th>
						<td><em>960</em></td>
					</tr>
				</table>
				<p>Sets the <a href="#">container</a> width. Can be a pixel value (eg. <em>960</em> or <em>"960px"</em>), a percentage value (eg. <em>"95%"</em>), or <em>"fluid"</em> (equivalent to <em>"100%"</em>).</p>
			</dd>
			<dt>grid</dt>
			<dd>
				<table>
					<tr>
						<th>Type</th>
						<td><a href="#">Grid Options</a></td>
					</tr>
					<tr>
						<th>Default</th>
						<td><em>{ gutters: 2, collapse: false }</em></td>
					</tr>
				</table>
				<p>Sets global grid options.</p>
			</dd>
			<dt id="config-breakpoints">breakpoints</dt>
			<dd>
				<table>
					<tr>
						<th>Type</th>
						<td><a href="#">Breakpoint Options</a></td>
					</tr>
					<tr>
						<th>Default</th>
						<td><em>{ "all": { range: "*", hasStyleSheet: false } }</em></td>
					</tr>
				</table>
				<p>The breakpoints list. Consists of an object in the following format:</p>
<pre>{
  "breakpointName": { <em>(<a href="#">breakpoint options</a>)</em> },
  "breakpointName": { <em>(<a href="#">breakpoint options</a>)</em> },
  "breakpointName": { <em>(<a href="#">breakpoint options</a>)</em> },
  ...
}</pre>
							<p>You can also use the following shorthand format if you only need to specify a range for each breakpoint:</p>
<pre>{
  "breakpointName": "<em>(<a href="#">range</a>)</em>",
  "breakpointName": "<em>(<a href="#">range</a>)</em>",
  "breakpointName": "<em>(<a href="#">range</a>)</em>",
  ...
}</pre>
				<p><strong>Note:</strong> Since breakpoint ranges are allowed to overlap, more than one can be active at any given time.
				When this happens, the options of each are combined in the order in which they were defined (with those defined last taking precedence).</p>
			</dd>
		</dl>
	</section>
	<section id="config-breakpoint" class="sub">
		<h3>Breakpoint Options</h3>
		<dl class="default">
			<dt id="config-breakpoint-range">range</dt>
			<dd>
				<table>
					<tr>
						<th>Type</th>
						<td>String</td>
					</tr>
					<tr>
						<th>Default</th>
						<td><em>"*"</em> (any width)</td>
					</tr>
				</table>
				<p>Sets the breakpoint's width range (in pixels). Can be any of the following:</p>
				<dl class="default">
					<dt>"*"</dt>
					<dd>Matches any viewport width.</dd>
					<dt>"X"</dt>
					<dd>Viewport width must be exactly X.</dd>
					<dt>"X-Y"</dt>
					<dd>Viewport width must be between X and Y (inclusive).</dd>
					<dt>"-X"</dt>
					<dd>Viewport width must be less than or equal to X.</dd>
					<dt>"X-"</dt>
					<dd>Viewport width must be greater than or equal to X.</dd>
				</dl>
			</dd>
			<dt>lockViewport</dt>
			<dd>
				<table>
					<tr>
						<th>Type</th>
						<td>Boolean</td>
					</tr>
					<tr>
						<th>Default</th>
						<td><em>false</em></td>
					</tr>
				</table>
				<p>If <em>true</em>, skel.js will (where applicable) disable viewport zooming and resizing. Should only be enabled on mobile-oriented breakpoints.</p>
			</dd>
			<dt>hasStyleSheet</dt>
			<dd>
				<table>
					<tr>
						<th>Type</th>
						<td>Boolean</td>
					</tr>
					<tr>
						<th>Default</th>
						<td><em>true</em></td>
					</tr>
				</table>
				<p>Determines if there's a stylesheet for this particular breakpoint. By default this is <em>true</em>, but there
				are times when setting this to <em>false</em> makes sense (for example, when a breakpoint exists only to change a few options).</p>
			</dd>
			<dt>grid</dt>
			<dd>
				<table>
					<tr>
						<th>Type</th>
						<td><a href="#">Grid Options</a></td>
					</tr>
					<tr>
						<th>Default</th>
						<td><em>null</em></td>
					</tr>
				</table>
				<p>Sets this breakpoint's grid options (overrides global grid options).</p>
			</dd>
		</dl>
	</section>
	<section id="config-grid" class="sub">
		<h3>Grid Options</h3>
		<dl class="default">
			<dt>gutters</dt>
			<dd>
				<table>
					<tr>
						<th>Type</th>
						<td>Integer</td>
					</tr>
					<tr>
						<th>Default</th>
						<td><em>2</em></td>
					</tr>
				</table>
				<p>Sets the gutter size. Can be <em>0</em> (for no gutters), <em>1</em> (for 1% gutters), <em>2</em> (for 2% gutters), <em>4</em> (for 4% gutters), or <em>6</em> (for 6% gutters). Anything else will tear reality asunder.</p>
			</dd>
			<dt id="configuation-grid-collapse">collapse</dt>
			<dd>
				<table>
					<tr>
						<th>Type</th>
						<td>Boolean</td>
					</tr>
					<tr>
						<th>Default</th>
						<td><em>false</em></td>
					</tr>
				</table>
				<p>If <em>true</em>, all cells (except those in <a href="#">persistent</a> grids) are forced to 100% 
				width regardless of their specified units (effectively "collapsing" the structure of the grid). 
				Should only be enabled on mobile-oriented breakpoints.</p>
			</dd>
		</dl>
	</section>
</section>