<h2 style="clear: both"><a name="xfce4-install" id=
"xfce4-install"></a>Installing Xfce4</h2>

<h3><a name="id2534533" id="id2534533"></a>Binary packages</h3>

<p>The Xfce 4 project officially only releases source code for
the desktop environment. However, binary packages may have been
contributed by other people for your OS or distribution.</p>

<p>Look at the Xfce site for <a href=
"http://xfce.org/index.php?page=download" target="_top">download
locations</a> and additional information about available binary
packages. If you could not find binary packages for your OS, they
may be available from your OS vendor or distributor, or you can
install Xfce 4 from source.</p>

<p>&iuml;&iquest;&frac12;</p>

<h3><a name="id2534968" id="id2534968"></a>Graphical
installers</h3>

<p>The easiest way to install Xfce from source is by using the
<a href="http://xfce-installers.os-cillation.com/" target=
"_top">graphical installers</a>. Documentation and instructions
are available.</p>

<p>&iuml;&iquest;&frac12;</p>

<h3><a name="id2534990" id="id2534990"></a>Building from
source</h3>

<p>To compile Xfce manually, look at the Xfce site for <a href=
"http://xfce.org/index.php?page=download" target="_top">download
locations</a>.</p>

<p>Building the packages should be a simple matter of unpacking
the tarballs and, from the top source directory, typing:</p>

<table border="0" bgcolor="#F3F4F8" width="100%">
<tr>
<td>
<pre>
./configure &amp;&amp; make &amp;&amp; make install
</pre>
</td>
</tr>
</table>

<p>Some package will have extra configure options available. You
can find them by typing <b>./configure <tt>--help</tt></b>.</p>

<p>Xfce 4 depends on pkg-config, GTK+ &gt;= 2.2, libxml2 and, for
xffm, on libdbh, which is available from <a href=
"http://sf.net/projects/libdbh" target="_top">SourceForge</a>. If
you installed these from a binary package, make sure you have the
corresponding <tt>-dev</tt> packages installed as well.</p>

<p>Optionally you can install librsvg &gt;= 2.2, for SVG icon
support, and libstartup-notification, to have a busy cursor when
loading applications that support this standard.</p>

<p>If you install into a different prefix from pkg-config, you
have to set the PKG_CONFIG_PATH variable to include the path to
the *.pc files installed by the Xfce 4 libraries, which is
${prefix}/lib/pkgconfig. For example:</p>

<table border="0" bgcolor="#F3F4F8" width="100%">
<tr>
<td>
<pre>
export PKG_CONFIG_PATH=/usr/local/lib/pkgconfig
</pre>
</td>
</tr>
</table>

<p>All source tarballs also contain a so called spec file that
allows you to build your own rpm's:</p>

<table border="0" bgcolor="#F3F4F8" width="100%">
<tr>
<td>
<pre>
rpmbuild -ta <tt>module-x.y.z.tar.gz</tt>
</pre>
</td>
</tr>
</table>

<p>&iuml;&iquest;&frac12;</p>

<h3><a name="id2535072" id="id2535072"></a>Using CVS</h3>

<p>The latest development sources for Xfce 4 are available from
CVS.</p>

<p>Look <a href=
"http://xfce.org/index.php?page=documentation&amp;lang=en#install"
target="_top">here</a> for information on how to obtain the
latest development updates from CVS. You can also use the WebCVS
link to browse the CVS tree.</p>

<p>&iuml;&iquest;&frac12;</p>

<h3><a name="id2596877" id="id2596877"></a>Additional
software</h3>

<p>The <a href="http://xfce-goodies.berlios.de" target=
"_top">Xfce Goodies</a> project collects third-party
contributions for Xfce 4. There are some excellent panel plugins
available that greatly enhance the functionality of Xfce 4.</p>

<p><a href="http://spuriousinterrupt.org/projects/xfmedia/"
target="_top">Xfmedia</a> is a lightweight media player for Xfce,
based on the xine engine. It is the perfect media player for the
perfect desktop environment.</p>

<p><a href="http://terminal.os-cillation.com/" target=
"_top">Terminal</a> is an advanced, but easy to use terminal
emulator for the Xfce Desktop Environment. It contains all
feature you would expect from a modern terminal emulator.</p>
