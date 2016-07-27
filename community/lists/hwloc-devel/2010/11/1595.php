<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2831";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 04:14:41 2010" -->
<!-- isoreceived="20101124091441" -->
<!-- sent="Wed, 24 Nov 2010 10:14:35 +0100" -->
<!-- isosent="20101124091435" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2831" -->
<!-- id="4CECD77B.2080101_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201011240902.oAO92J7m031626_at_sourcehaven.osl.iu.edu" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2831<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-24 04:14:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1596.php">Pavan Balaji: "[hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1594.php">Brice Goglin: "Re: [hwloc-devel] Valgrind errors for hwloc_bind in 1.1rc4r2825"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1599.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2831"</a>
<li><strong>Maybe reply:</strong> <a href="1599.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2831"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We should uniformize how the graphic/drawing and text outputs are called
<br>
in the manpage/usage/doc/README, it may be a bit misleading now. But I
<br>
am not sure which terms are best between graphic and drawing, and
<br>
between console and text.
<br>
<p>Also, is everybody ok with the new defaults and formatting:
<br>
* graphic/drawing
<br>
physical by default
<br>
legend by default
<br>
both logical and physical indexes prefixed with #
<br>
* text/console
<br>
logical by default
<br>
never any legend (add one in verbose mode?)
<br>
logical indexes prefixed with # (and the interesting physical one appear
<br>
in parentheses as phys=X)
<br>
physical indexes prefixed with p#
<br>
<p>FWIW, in 1.0.3, the only thing that changes is the default index in
<br>
drawing mode. There is no legend or prefix change there.
<br>
<p>Brice
<br>
<p><p><p><p>Le 24/11/2010 10:02, bgoglin_at_[hidden] a &#233;crit :
<br>
<span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2010-11-24 04:02:18 EST (Wed, 24 Nov 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 2831
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2831">https://svn.open-mpi.org/trac/hwloc/changeset/2831</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; lstopo: add --no-legend to remove the new text legend at the bottom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And update NEWS about all this.
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/NEWS                   |     5 +++++                                   
</span><br>
<span class="quotelev1">&gt;    trunk/utils/lstopo-cairo.c   |    36 ++++++++++++++++++------------------    
</span><br>
<span class="quotelev1">&gt;    trunk/utils/lstopo-draw.c    |    30 ++++++++++++++++--------------          
</span><br>
<span class="quotelev1">&gt;    trunk/utils/lstopo-fig.c     |     6 +++---                                  
</span><br>
<span class="quotelev1">&gt;    trunk/utils/lstopo-text.c    |     8 ++++----                                
</span><br>
<span class="quotelev1">&gt;    trunk/utils/lstopo-windows.c |     4 ++--                                    
</span><br>
<span class="quotelev1">&gt;    trunk/utils/lstopo-xml.c     |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;    trunk/utils/lstopo.1in       |     3 +++                                     
</span><br>
<span class="quotelev1">&gt;    trunk/utils/lstopo.c         |    27 ++++++++++++++++-----------             
</span><br>
<span class="quotelev1">&gt;    trunk/utils/lstopo.h         |     6 +++---                                  
</span><br>
<span class="quotelev1">&gt;    10 files changed, 71 insertions(+), 56 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/NEWS
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/NEWS	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/NEWS	2010-11-24 04:02:18 EST (Wed, 24 Nov 2010)
</span><br>
<span class="quotelev1">&gt; @@ -52,6 +52,11 @@
</span><br>
<span class="quotelev1">&gt;      with CUDA Runtime and Driver APIs.
</span><br>
<span class="quotelev1">&gt;    + Add Myrinet Express helper in myriexpress.h to ease interoperability.
</span><br>
<span class="quotelev1">&gt;  * Tools
</span><br>
<span class="quotelev1">&gt; +  + lstopo now displays physical/OS indexes by default in drawing mode
</span><br>
<span class="quotelev1">&gt; +    (use -l to switch back to logical indexes). The text output still uses
</span><br>
<span class="quotelev1">&gt; +    logical by default (use -p to switch to physical indexes).
</span><br>
<span class="quotelev1">&gt; +  + Add a legend at the bottom of the lstopo drawing output, use --no-legend
</span><br>
<span class="quotelev1">&gt; +    to remove it.
</span><br>
<span class="quotelev1">&gt;    + Add hwloc-ps to list process' bindings.
</span><br>
<span class="quotelev1">&gt;    + Add --membind and --mempolicy options to hwloc-bind.
</span><br>
<span class="quotelev1">&gt;    + Improve tools command-line options by adding a generic --input option
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/utils/lstopo-cairo.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/utils/lstopo-cairo.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/utils/lstopo-cairo.c	2010-11-24 04:02:18 EST (Wed, 24 Nov 2010)
</span><br>
<span class="quotelev1">&gt; @@ -95,11 +95,11 @@
</span><br>
<span class="quotelev1">&gt;  #endif /* (CAIRO_HAS_PNG_FUNCTIONS + CAIRO_HAS_PDF_SURFACE + CAIRO_HAS_PS_SURFACE + CAIRO_HAS_SVG_SURFACE) */
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  static void
</span><br>
<span class="quotelev1">&gt; -topo_cairo_paint(struct draw_methods *methods, int logical, hwloc_topology_t topology, cairo_surface_t *cs)
</span><br>
<span class="quotelev1">&gt; +topo_cairo_paint(struct draw_methods *methods, int logical, int legend, hwloc_topology_t topology, cairo_surface_t *cs)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    cairo_t *c;
</span><br>
<span class="quotelev1">&gt;    c = cairo_create(cs);
</span><br>
<span class="quotelev1">&gt; -  output_draw(methods, logical, topology, c);
</span><br>
<span class="quotelev1">&gt; +  output_draw(methods, logical, legend, topology, c);
</span><br>
<span class="quotelev1">&gt;    cairo_show_page(c);
</span><br>
<span class="quotelev1">&gt;    cairo_destroy(c);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; @@ -207,15 +207,15 @@
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  void
</span><br>
<span class="quotelev1">&gt; -output_x11(hwloc_topology_t topology, const char *filename __hwloc_attribute_unused, int logical, int verbose_mode __hwloc_attribute_unused)
</span><br>
<span class="quotelev1">&gt; +output_x11(hwloc_topology_t topology, const char *filename __hwloc_attribute_unused, int logical, int legend, int verbose_mode __hwloc_attribute_unused)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -  struct display *disp = output_draw_start(&amp;x11_draw_methods, logical, topology, NULL);
</span><br>
<span class="quotelev1">&gt; +  struct display *disp = output_draw_start(&amp;x11_draw_methods, logical, legend, topology, NULL);
</span><br>
<span class="quotelev1">&gt;    int finish = 0;
</span><br>
<span class="quotelev1">&gt;    int state = 0;
</span><br>
<span class="quotelev1">&gt;    int x = 0, y = 0; /* shut warning down */
</span><br>
<span class="quotelev1">&gt;    int lastx = disp-&gt;x, lasty = disp-&gt;y;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -  topo_cairo_paint(&amp;x11_draw_methods, logical, topology, disp-&gt;cs);
</span><br>
<span class="quotelev1">&gt; +  topo_cairo_paint(&amp;x11_draw_methods, logical, legend, topology, disp-&gt;cs);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    while (!finish) {
</span><br>
<span class="quotelev1">&gt;      XEvent e;
</span><br>
<span class="quotelev1">&gt; @@ -231,7 +231,7 @@
</span><br>
<span class="quotelev1">&gt;      switch (e.type) {
</span><br>
<span class="quotelev1">&gt;        case Expose:
</span><br>
<span class="quotelev1">&gt;  	if (e.xexpose.count &lt; 1)
</span><br>
<span class="quotelev1">&gt; -	  topo_cairo_paint(&amp;x11_draw_methods, logical, topology, disp-&gt;cs);
</span><br>
<span class="quotelev1">&gt; +	  topo_cairo_paint(&amp;x11_draw_methods, logical, legend, topology, disp-&gt;cs);
</span><br>
<span class="quotelev1">&gt;  	break;
</span><br>
<span class="quotelev1">&gt;        case MotionNotify:
</span><br>
<span class="quotelev1">&gt;  	if (state) {
</span><br>
<span class="quotelev1">&gt; @@ -346,7 +346,7 @@
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  void
</span><br>
<span class="quotelev1">&gt; -output_png(hwloc_topology_t topology, const char *filename, int logical, int verbose_mode __hwloc_attribute_unused)
</span><br>
<span class="quotelev1">&gt; +output_png(hwloc_topology_t topology, const char *filename, int logical, int legend, int verbose_mode __hwloc_attribute_unused)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    FILE *output = open_file(filename, &quot;w&quot;);
</span><br>
<span class="quotelev1">&gt;    cairo_surface_t *cs;
</span><br>
<span class="quotelev1">&gt; @@ -356,9 +356,9 @@
</span><br>
<span class="quotelev1">&gt;      return;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -  cs = output_draw_start(&amp;png_draw_methods, logical, topology, output);
</span><br>
<span class="quotelev1">&gt; +  cs = output_draw_start(&amp;png_draw_methods, logical, legend, topology, output);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -  topo_cairo_paint(&amp;png_draw_methods, logical, topology, cs);
</span><br>
<span class="quotelev1">&gt; +  topo_cairo_paint(&amp;png_draw_methods, logical, legend, topology, cs);
</span><br>
<span class="quotelev1">&gt;    cairo_surface_write_to_png_stream(cs, topo_cairo_write, output);
</span><br>
<span class="quotelev1">&gt;    cairo_surface_destroy(cs);
</span><br>
<span class="quotelev1">&gt;    fclose(output);
</span><br>
<span class="quotelev1">&gt; @@ -383,7 +383,7 @@
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  void
</span><br>
<span class="quotelev1">&gt; -output_pdf(hwloc_topology_t topology, const char *filename, int logical, int verbose_mode __hwloc_attribute_unused)
</span><br>
<span class="quotelev1">&gt; +output_pdf(hwloc_topology_t topology, const char *filename, int logical, int legend, int verbose_mode __hwloc_attribute_unused)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    FILE *output = open_file(filename, &quot;w&quot;);
</span><br>
<span class="quotelev1">&gt;    cairo_surface_t *cs;
</span><br>
<span class="quotelev1">&gt; @@ -393,9 +393,9 @@
</span><br>
<span class="quotelev1">&gt;      return;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -  cs = output_draw_start(&amp;pdf_draw_methods, logical, topology, output);
</span><br>
<span class="quotelev1">&gt; +  cs = output_draw_start(&amp;pdf_draw_methods, logical, legend, topology, output);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -  topo_cairo_paint(&amp;pdf_draw_methods, logical, topology, cs);
</span><br>
<span class="quotelev1">&gt; +  topo_cairo_paint(&amp;pdf_draw_methods, logical, legend, topology, cs);
</span><br>
<span class="quotelev1">&gt;    cairo_surface_flush(cs);
</span><br>
<span class="quotelev1">&gt;    cairo_surface_destroy(cs);
</span><br>
<span class="quotelev1">&gt;    fclose(output);
</span><br>
<span class="quotelev1">&gt; @@ -420,7 +420,7 @@
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  void
</span><br>
<span class="quotelev1">&gt; -output_ps(hwloc_topology_t topology, const char *filename, int logical, int verbose_mode __hwloc_attribute_unused)
</span><br>
<span class="quotelev1">&gt; +output_ps(hwloc_topology_t topology, const char *filename, int logical, int legend, int verbose_mode __hwloc_attribute_unused)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    FILE *output = open_file(filename, &quot;w&quot;);
</span><br>
<span class="quotelev1">&gt;    cairo_surface_t *cs;
</span><br>
<span class="quotelev1">&gt; @@ -430,9 +430,9 @@
</span><br>
<span class="quotelev1">&gt;      return;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -  cs = output_draw_start(&amp;ps_draw_methods, logical, topology, output);
</span><br>
<span class="quotelev1">&gt; +  cs = output_draw_start(&amp;ps_draw_methods, logical, legend, topology, output);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -  topo_cairo_paint(&amp;ps_draw_methods, logical, topology, cs);
</span><br>
<span class="quotelev1">&gt; +  topo_cairo_paint(&amp;ps_draw_methods, logical, legend, topology, cs);
</span><br>
<span class="quotelev1">&gt;    cairo_surface_flush(cs);
</span><br>
<span class="quotelev1">&gt;    cairo_surface_destroy(cs);
</span><br>
<span class="quotelev1">&gt;    fclose(output);
</span><br>
<span class="quotelev1">&gt; @@ -457,7 +457,7 @@
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  void
</span><br>
<span class="quotelev1">&gt; -output_svg(hwloc_topology_t topology, const char *filename, int logical, int verbose_mode __hwloc_attribute_unused)
</span><br>
<span class="quotelev1">&gt; +output_svg(hwloc_topology_t topology, const char *filename, int logical, int legend, int verbose_mode __hwloc_attribute_unused)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    FILE *output;
</span><br>
<span class="quotelev1">&gt;    cairo_surface_t *cs;
</span><br>
<span class="quotelev1">&gt; @@ -468,9 +468,9 @@
</span><br>
<span class="quotelev1">&gt;      return;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -  cs = output_draw_start(&amp;svg_draw_methods, logical, topology, output);
</span><br>
<span class="quotelev1">&gt; +  cs = output_draw_start(&amp;svg_draw_methods, logical, legend, topology, output);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -  topo_cairo_paint(&amp;svg_draw_methods, logical, topology, cs);
</span><br>
<span class="quotelev1">&gt; +  topo_cairo_paint(&amp;svg_draw_methods, logical, legend, topology, cs);
</span><br>
<span class="quotelev1">&gt;    cairo_surface_flush(cs);
</span><br>
<span class="quotelev1">&gt;    cairo_surface_destroy(cs);
</span><br>
<span class="quotelev1">&gt;    fclose(output);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/utils/lstopo-draw.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/utils/lstopo-draw.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/utils/lstopo-draw.c	2010-11-24 04:02:18 EST (Wed, 24 Nov 2010)
</span><br>
<span class="quotelev1">&gt; @@ -656,7 +656,7 @@
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  static void
</span><br>
<span class="quotelev1">&gt; -fig(hwloc_topology_t topology, struct draw_methods *methods, int logical, hwloc_obj_t level, void *output, unsigned depth, unsigned x, unsigned y)
</span><br>
<span class="quotelev1">&gt; +fig(hwloc_topology_t topology, struct draw_methods *methods, int logical, int legend, hwloc_obj_t level, void *output, unsigned depth, unsigned x, unsigned y)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    unsigned totwidth, totheight;
</span><br>
<span class="quotelev1">&gt;    time_t t;
</span><br>
<span class="quotelev1">&gt; @@ -674,18 +674,20 @@
</span><br>
<span class="quotelev1">&gt;    if (n &amp;&amp; date[n-1] == '\n');
</span><br>
<span class="quotelev1">&gt;      date[n-1] = 0;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -  if (hwloc_topology_is_thissystem(topology) &amp;&amp;
</span><br>
<span class="quotelev1">&gt; +  if (legend) {
</span><br>
<span class="quotelev1">&gt; +    if (hwloc_topology_is_thissystem(topology) &amp;&amp;
</span><br>
<span class="quotelev1">&gt;  #ifdef HWLOC_WIN_SYS
</span><br>
<span class="quotelev1">&gt; -      GetComputerName(hostname, &amp;hostname_size)
</span><br>
<span class="quotelev1">&gt; +        GetComputerName(hostname, &amp;hostname_size)
</span><br>
<span class="quotelev1">&gt;  #else
</span><br>
<span class="quotelev1">&gt; -      !gethostname(hostname, hostname_size)
</span><br>
<span class="quotelev1">&gt; +        !gethostname(hostname, hostname_size)
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; -      )
</span><br>
<span class="quotelev1">&gt; -    snprintf(text, sizeof(text), &quot;%s IDs for %s on %s&quot;, logical ? &quot;logical&quot; : &quot;physical&quot;, hostname, date);
</span><br>
<span class="quotelev1">&gt; -  else
</span><br>
<span class="quotelev1">&gt; -    snprintf(text, sizeof(text), &quot;%s IDs on %s&quot;, logical ? &quot;logical&quot; : &quot;physical&quot;, date);
</span><br>
<span class="quotelev1">&gt; -  methods-&gt;box(output, 0xff, 0xff, 0xff, depth, 0, totwidth, totheight, gridsize + fontsize + gridsize);
</span><br>
<span class="quotelev1">&gt; -  methods-&gt;text(output, 0, 0, 0, fontsize, depth, gridsize, totheight + gridsize, text);
</span><br>
<span class="quotelev1">&gt; +        )
</span><br>
<span class="quotelev1">&gt; +      snprintf(text, sizeof(text), &quot;%s IDs for %s on %s&quot;, logical ? &quot;logical&quot; : &quot;physical&quot;, hostname, date);
</span><br>
<span class="quotelev1">&gt; +    else
</span><br>
<span class="quotelev1">&gt; +      snprintf(text, sizeof(text), &quot;%s IDs on %s&quot;, logical ? &quot;logical&quot; : &quot;physical&quot;, date);
</span><br>
<span class="quotelev1">&gt; +    methods-&gt;box(output, 0xff, 0xff, 0xff, depth, 0, totwidth, totheight, gridsize + fontsize + gridsize);
</span><br>
<span class="quotelev1">&gt; +    methods-&gt;text(output, 0, 0, 0, fontsize, depth, gridsize, totheight + gridsize, text);
</span><br>
<span class="quotelev1">&gt; +  }
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  /*
</span><br>
<span class="quotelev1">&gt; @@ -756,10 +758,10 @@
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  void *
</span><br>
<span class="quotelev1">&gt; -output_draw_start(struct draw_methods *methods, int logical, hwloc_topology_t topology, void *output)
</span><br>
<span class="quotelev1">&gt; +output_draw_start(struct draw_methods *methods, int logical, int legend, hwloc_topology_t topology, void *output)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    struct coords coords = { .x = 0, .y = 0};
</span><br>
<span class="quotelev1">&gt; -  fig(topology, &amp;getmax_draw_methods, logical, hwloc_get_root_obj(topology), &amp;coords, 100, 0, 0);
</span><br>
<span class="quotelev1">&gt; +  fig(topology, &amp;getmax_draw_methods, logical, legend, hwloc_get_root_obj(topology), &amp;coords, 100, 0, 0);
</span><br>
<span class="quotelev1">&gt;    output = methods-&gt;start(output, coords.x, coords.y);
</span><br>
<span class="quotelev1">&gt;    methods-&gt;declare_color(output, 0, 0, 0);
</span><br>
<span class="quotelev1">&gt;    methods-&gt;declare_color(output, NODE_R_COLOR, NODE_G_COLOR, NODE_B_COLOR);
</span><br>
<span class="quotelev1">&gt; @@ -778,7 +780,7 @@
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  void
</span><br>
<span class="quotelev1">&gt; -output_draw(struct draw_methods *methods, int logical, hwloc_topology_t topology, void *output)
</span><br>
<span class="quotelev1">&gt; +output_draw(struct draw_methods *methods, int logical, int legend, hwloc_topology_t topology, void *output)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -	fig(topology, methods, logical, hwloc_get_root_obj(topology), output, 100, 0, 0);
</span><br>
<span class="quotelev1">&gt; +	fig(topology, methods, logical, legend, hwloc_get_root_obj(topology), output, 100, 0, 0);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/utils/lstopo-fig.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/utils/lstopo-fig.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/utils/lstopo-fig.c	2010-11-24 04:02:18 EST (Wed, 24 Nov 2010)
</span><br>
<span class="quotelev1">&gt; @@ -116,7 +116,7 @@
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  void
</span><br>
<span class="quotelev1">&gt; -output_fig (hwloc_topology_t topology, const char *filename, int logical, int verbose_mode __hwloc_attribute_unused)
</span><br>
<span class="quotelev1">&gt; +output_fig (hwloc_topology_t topology, const char *filename, int logical, int legend, int verbose_mode __hwloc_attribute_unused)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    FILE *output = open_file(filename, &quot;w&quot;);
</span><br>
<span class="quotelev1">&gt;    if (!output) {
</span><br>
<span class="quotelev1">&gt; @@ -124,7 +124,7 @@
</span><br>
<span class="quotelev1">&gt;      return;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -  output = output_draw_start(&amp;fig_draw_methods, logical, topology, output);
</span><br>
<span class="quotelev1">&gt; -  output_draw(&amp;fig_draw_methods, logical, topology, output);
</span><br>
<span class="quotelev1">&gt; +  output = output_draw_start(&amp;fig_draw_methods, logical, legend, topology, output);
</span><br>
<span class="quotelev1">&gt; +  output_draw(&amp;fig_draw_methods, logical, legend, topology, output);
</span><br>
<span class="quotelev1">&gt;    fclose(output);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/utils/lstopo-text.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/utils/lstopo-text.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/utils/lstopo-text.c	2010-11-24 04:02:18 EST (Wed, 24 Nov 2010)
</span><br>
<span class="quotelev1">&gt; @@ -120,7 +120,7 @@
</span><br>
<span class="quotelev1">&gt;      output_only (topology, l-&gt;children[x], output, logical, verbose_mode);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -void output_console(hwloc_topology_t topology, const char *filename, int logical, int verbose_mode)
</span><br>
<span class="quotelev1">&gt; +void output_console(hwloc_topology_t topology, const char *filename, int logical, int legend __hwloc_attribute_unused, int verbose_mode)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    unsigned topodepth;
</span><br>
<span class="quotelev1">&gt;    FILE *output;
</span><br>
<span class="quotelev1">&gt; @@ -606,7 +606,7 @@
</span><br>
<span class="quotelev1">&gt;    .text = text_text,
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -void output_text(hwloc_topology_t topology, const char *filename, int logical, int verbose_mode __hwloc_attribute_unused)
</span><br>
<span class="quotelev1">&gt; +void output_text(hwloc_topology_t topology, const char *filename, int logical, int legend, int verbose_mode __hwloc_attribute_unused)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    FILE *output;
</span><br>
<span class="quotelev1">&gt;    struct display *disp;
</span><br>
<span class="quotelev1">&gt; @@ -665,8 +665,8 @@
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;  #endif /* HWLOC_HAVE_LIBTERMCAP */
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -  disp = output_draw_start(&amp;text_draw_methods, logical, topology, output);
</span><br>
<span class="quotelev1">&gt; -  output_draw(&amp;text_draw_methods, logical, topology, disp);
</span><br>
<span class="quotelev1">&gt; +  disp = output_draw_start(&amp;text_draw_methods, logical, legend, topology, output);
</span><br>
<span class="quotelev1">&gt; +  output_draw(&amp;text_draw_methods, logical, legend, topology, disp);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;    lfr = lfg = lfb = -1;
</span><br>
<span class="quotelev1">&gt;    lbr = lbg = lbb = -1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/utils/lstopo-windows.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/utils/lstopo-windows.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/utils/lstopo-windows.c	2010-11-24 04:02:18 EST (Wed, 24 Nov 2010)
</span><br>
<span class="quotelev1">&gt; @@ -262,12 +262,12 @@
</span><br>
<span class="quotelev1">&gt;  };
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  void
</span><br>
<span class="quotelev1">&gt; -output_windows (hwloc_topology_t topology, const char *filename __hwloc_attribute_unused, int logical, int verbose_mode __hwloc_attribute_unused)
</span><br>
<span class="quotelev1">&gt; +output_windows (hwloc_topology_t topology, const char *filename __hwloc_attribute_unused, int logical, int legend, int verbose_mode __hwloc_attribute_unused)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    HWND toplevel;
</span><br>
<span class="quotelev1">&gt;    the_topology = topology;
</span><br>
<span class="quotelev1">&gt;    the_logical = logical;
</span><br>
<span class="quotelev1">&gt; -  toplevel = output_draw_start(&amp;windows_draw_methods, logical, topology, NULL);
</span><br>
<span class="quotelev1">&gt; +  toplevel = output_draw_start(&amp;windows_draw_methods, logical, legend, topology, NULL);
</span><br>
<span class="quotelev1">&gt;    UpdateWindow(toplevel);
</span><br>
<span class="quotelev1">&gt;    MSG msg;
</span><br>
<span class="quotelev1">&gt;    while (!finish &amp;&amp; GetMessage(&amp;msg, NULL, 0, 0)) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/utils/lstopo-xml.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/utils/lstopo-xml.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/utils/lstopo-xml.c	2010-11-24 04:02:18 EST (Wed, 24 Nov 2010)
</span><br>
<span class="quotelev1">&gt; @@ -15,7 +15,7 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  #include &quot;lstopo.h&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -void output_xml(hwloc_topology_t topology, const char *filename, int logical __hwloc_attribute_unused, int verbose_mode __hwloc_attribute_unused)
</span><br>
<span class="quotelev1">&gt; +void output_xml(hwloc_topology_t topology, const char *filename, int logical __hwloc_attribute_unused, int legend __hwloc_attribute_unused, int verbose_mode __hwloc_attribute_unused)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt;    if (!filename || !strcasecmp(filename, &quot;-.xml&quot;))
</span><br>
<span class="quotelev1">&gt;      filename = &quot;-&quot;;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/utils/lstopo.1in
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/utils/lstopo.1in	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/utils/lstopo.1in	2010-11-24 04:02:18 EST (Wed, 24 Nov 2010)
</span><br>
<span class="quotelev1">&gt; @@ -117,6 +117,9 @@
</span><br>
<span class="quotelev1">&gt;  \fB\-\-vert\fR
</span><br>
<span class="quotelev1">&gt;  Vertical graphic layout instead of nearly 4/3 ratio.
</span><br>
<span class="quotelev1">&gt;  .TP
</span><br>
<span class="quotelev1">&gt; +\fB\-\-no\-legend\fR
</span><br>
<span class="quotelev1">&gt; +Remove the text legend at the bottom.
</span><br>
<span class="quotelev1">&gt; +.TP
</span><br>
<span class="quotelev1">&gt;  \fB\-\-version\fR
</span><br>
<span class="quotelev1">&gt;  Report version and exit.
</span><br>
<span class="quotelev1">&gt;  .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/utils/lstopo.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/utils/lstopo.c	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/utils/lstopo.c	2010-11-24 04:02:18 EST (Wed, 24 Nov 2010)
</span><br>
<span class="quotelev1">&gt; @@ -34,6 +34,7 @@
</span><br>
<span class="quotelev1">&gt;  unsigned int gridsize = 10;
</span><br>
<span class="quotelev1">&gt;  unsigned int force_horiz = 0;
</span><br>
<span class="quotelev1">&gt;  unsigned int force_vert = 0;
</span><br>
<span class="quotelev1">&gt; +unsigned int legend = 1;
</span><br>
<span class="quotelev1">&gt;  unsigned int top = 0;
</span><br>
<span class="quotelev1">&gt;  hwloc_pid_t pid = (hwloc_pid_t) -1;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -221,6 +222,7 @@
</span><br>
<span class="quotelev1">&gt;    fprintf (where, &quot;  --gridsize 10         Set size of margin between elements\n&quot;);
</span><br>
<span class="quotelev1">&gt;    fprintf (where, &quot;  --horiz               Horizontal graphic layout instead of nearly 4/3 ratio\n&quot;);
</span><br>
<span class="quotelev1">&gt;    fprintf (where, &quot;  --vert                Vertical graphic layout instead of nearly 4/3 ratio\n&quot;);
</span><br>
<span class="quotelev1">&gt; +  fprintf (where, &quot;  --no-legend           Remove the text legend at the bottom\n&quot;);
</span><br>
<span class="quotelev1">&gt;    fprintf (where, &quot;Miscellaneous options:\n&quot;);
</span><br>
<span class="quotelev1">&gt;    fprintf (where, &quot;  --ps --top            Display processes within the hierarchy\n&quot;);
</span><br>
<span class="quotelev1">&gt;    fprintf (where, &quot;  --version             Report version and exit\n&quot;);
</span><br>
<span class="quotelev1">&gt; @@ -359,6 +361,9 @@
</span><br>
<span class="quotelev1">&gt;  	gridsize = atoi(argv[2]);
</span><br>
<span class="quotelev1">&gt;  	opt = 1;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt; +      else if (!strcmp (argv[1], &quot;--no-legend&quot;)) {
</span><br>
<span class="quotelev1">&gt; +	legend = 0;
</span><br>
<span class="quotelev1">&gt; +      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;        else if (hwloc_utils_lookup_input_option(argv+1, argc-1, &amp;opt,
</span><br>
<span class="quotelev1">&gt;  					       &amp;input, &amp;input_format,
</span><br>
<span class="quotelev1">&gt; @@ -465,7 +470,7 @@
</span><br>
<span class="quotelev1">&gt;        if (getenv(&quot;DISPLAY&quot;)) {
</span><br>
<span class="quotelev1">&gt;          if (logical == -1)
</span><br>
<span class="quotelev1">&gt;            logical = 0;
</span><br>
<span class="quotelev1">&gt; -        output_x11(topology, NULL, logical, verbose_mode);
</span><br>
<span class="quotelev1">&gt; +        output_x11(topology, NULL, logical, legend, verbose_mode);
</span><br>
<span class="quotelev1">&gt;        } else
</span><br>
<span class="quotelev1">&gt;  #endif /* CAIRO_HAS_XLIB_SURFACE */
</span><br>
<span class="quotelev1">&gt;  #endif /* HWLOC_HAVE_CAIRO */
</span><br>
<span class="quotelev1">&gt; @@ -473,51 +478,51 @@
</span><br>
<span class="quotelev1">&gt;        {
</span><br>
<span class="quotelev1">&gt;          if (logical == -1)
</span><br>
<span class="quotelev1">&gt;            logical = 0;
</span><br>
<span class="quotelev1">&gt; -        output_windows(topology, NULL, logical, verbose_mode);
</span><br>
<span class="quotelev1">&gt; +        output_windows(topology, NULL, logical, legend, verbose_mode);
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;  #else
</span><br>
<span class="quotelev1">&gt;        {
</span><br>
<span class="quotelev1">&gt;          if (logical == -1)
</span><br>
<span class="quotelev1">&gt;            logical = 1;
</span><br>
<span class="quotelev1">&gt; -        output_console(topology, NULL, logical, verbose_mode);
</span><br>
<span class="quotelev1">&gt; +        output_console(topology, NULL, logical, legend, verbose_mode);
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;        break;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      case LSTOPO_OUTPUT_CONSOLE:
</span><br>
<span class="quotelev1">&gt; -      output_console(topology, filename, logical, verbose_mode);
</span><br>
<span class="quotelev1">&gt; +      output_console(topology, filename, logical, legend, verbose_mode);
</span><br>
<span class="quotelev1">&gt;        break;
</span><br>
<span class="quotelev1">&gt;      case LSTOPO_OUTPUT_TEXT:
</span><br>
<span class="quotelev1">&gt; -      output_text(topology, filename, logical, verbose_mode);
</span><br>
<span class="quotelev1">&gt; +      output_text(topology, filename, logical, legend, verbose_mode);
</span><br>
<span class="quotelev1">&gt;        break;
</span><br>
<span class="quotelev1">&gt;      case LSTOPO_OUTPUT_FIG:
</span><br>
<span class="quotelev1">&gt; -      output_fig(topology, filename, logical, verbose_mode);
</span><br>
<span class="quotelev1">&gt; +      output_fig(topology, filename, logical, legend, verbose_mode);
</span><br>
<span class="quotelev1">&gt;        break;
</span><br>
<span class="quotelev1">&gt;  #ifdef HWLOC_HAVE_CAIRO
</span><br>
<span class="quotelev1">&gt;  # if CAIRO_HAS_PNG_FUNCTIONS
</span><br>
<span class="quotelev1">&gt;      case LSTOPO_OUTPUT_PNG:
</span><br>
<span class="quotelev1">&gt; -      output_png(topology, filename, logical, verbose_mode);
</span><br>
<span class="quotelev1">&gt; +      output_png(topology, filename, logical, legend, verbose_mode);
</span><br>
<span class="quotelev1">&gt;        break;
</span><br>
<span class="quotelev1">&gt;  # endif /* CAIRO_HAS_PNG_FUNCTIONS */
</span><br>
<span class="quotelev1">&gt;  # if CAIRO_HAS_PDF_SURFACE
</span><br>
<span class="quotelev1">&gt;      case LSTOPO_OUTPUT_PDF:
</span><br>
<span class="quotelev1">&gt; -      output_pdf(topology, filename, logical, verbose_mode);
</span><br>
<span class="quotelev1">&gt; +      output_pdf(topology, filename, logical, legend, verbose_mode);
</span><br>
<span class="quotelev1">&gt;        break;
</span><br>
<span class="quotelev1">&gt;  # endif /* CAIRO_HAS_PDF_SURFACE */
</span><br>
<span class="quotelev1">&gt;  # if CAIRO_HAS_PS_SURFACE
</span><br>
<span class="quotelev1">&gt;      case LSTOPO_OUTPUT_PS:
</span><br>
<span class="quotelev1">&gt; -      output_ps(topology, filename, logical, verbose_mode);
</span><br>
<span class="quotelev1">&gt; +      output_ps(topology, filename, logical, legend, verbose_mode);
</span><br>
<span class="quotelev1">&gt;        break;
</span><br>
<span class="quotelev1">&gt;  #endif /* CAIRO_HAS_PS_SURFACE */
</span><br>
<span class="quotelev1">&gt;  #if CAIRO_HAS_SVG_SURFACE
</span><br>
<span class="quotelev1">&gt;      case LSTOPO_OUTPUT_SVG:
</span><br>
<span class="quotelev1">&gt; -      output_svg(topology, filename, logical, verbose_mode);
</span><br>
<span class="quotelev1">&gt; +      output_svg(topology, filename, logical, legend, verbose_mode);
</span><br>
<span class="quotelev1">&gt;        break;
</span><br>
<span class="quotelev1">&gt;  #endif /* CAIRO_HAS_SVG_SURFACE */
</span><br>
<span class="quotelev1">&gt;  #endif /* HWLOC_HAVE_CAIRO */
</span><br>
<span class="quotelev1">&gt;  #ifdef HWLOC_HAVE_XML
</span><br>
<span class="quotelev1">&gt;      case LSTOPO_OUTPUT_XML:
</span><br>
<span class="quotelev1">&gt; -      output_xml(topology, filename, logical, verbose_mode);
</span><br>
<span class="quotelev1">&gt; +      output_xml(topology, filename, logical, legend, verbose_mode);
</span><br>
<span class="quotelev1">&gt;        break;
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt;      default:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/utils/lstopo.h
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/utils/lstopo.h	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/utils/lstopo.h	2010-11-24 04:02:18 EST (Wed, 24 Nov 2010)
</span><br>
<span class="quotelev1">&gt; @@ -16,7 +16,7 @@
</span><br>
<span class="quotelev1">&gt;  extern int taskset;
</span><br>
<span class="quotelev1">&gt;  extern hwloc_pid_t pid;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -typedef void output_method (struct hwloc_topology *topology, const char *output, int logical, int verbose_mode);
</span><br>
<span class="quotelev1">&gt; +typedef void output_method (struct hwloc_topology *topology, const char *output, int logical, int legend, int verbose_mode);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  FILE *open_file(const char *filename, const char *mode) __hwloc_attribute_malloc;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; @@ -32,8 +32,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  extern unsigned int gridsize, fontsize, force_horiz, force_vert;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -extern void *output_draw_start(struct draw_methods *draw_methods, int logical, struct hwloc_topology *topology, void *output);
</span><br>
<span class="quotelev1">&gt; -extern void output_draw(struct draw_methods *draw_methods, int logical, struct hwloc_topology *topology, void *output);
</span><br>
<span class="quotelev1">&gt; +extern void *output_draw_start(struct draw_methods *draw_methods, int logical, int legend, struct hwloc_topology *topology, void *output);
</span><br>
<span class="quotelev1">&gt; +extern void output_draw(struct draw_methods *draw_methods, int logical, int legend, struct hwloc_topology *topology, void *output);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  int rgb_to_color(int r, int g, int b) __hwloc_attribute_const;
</span><br>
<span class="quotelev1">&gt;  int declare_color(int r, int g, int b);
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1596.php">Pavan Balaji: "[hwloc-devel] hwloc patches for upstream"</a>
<li><strong>Previous message:</strong> <a href="1594.php">Brice Goglin: "Re: [hwloc-devel] Valgrind errors for hwloc_bind in 1.1rc4r2825"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1599.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2831"</a>
<li><strong>Maybe reply:</strong> <a href="1599.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2831"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
