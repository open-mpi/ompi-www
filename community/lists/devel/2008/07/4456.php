<?
$subject_val = "Re: [OMPI devel] Funny warning message";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 10:23:39 2008" -->
<!-- isoreceived="20080728142339" -->
<!-- sent="Mon, 28 Jul 2008 10:22:57 -0400" -->
<!-- isosent="20080728142257" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Funny warning message" -->
<!-- id="C279507A-4D51-4119-8185-AB5453C2F0F7_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080728141711.GV22109_at_ltw.loris.tv" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Funny warning message<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 10:22:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4457.php">Ralph Castain: "Re: [OMPI devel] Funny warning message"</a>
<li><strong>Previous message:</strong> <a href="4455.php">Jeff Squyres: "[OMPI devel] RFC: MCA DSO filename"</a>
<li><strong>In reply to:</strong> <a href="4454.php">Adrian Knoth: "Re: [OMPI devel] Funny warning message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4457.php">Ralph Castain: "Re: [OMPI devel] Funny warning message"</a>
<li><strong>Reply:</strong> <a href="4457.php">Ralph Castain: "Re: [OMPI devel] Funny warning message"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think Lenny is pointing out that &quot;smaller&quot; got changed to &quot;bigger&quot;,  
<br>
too.  :-)
<br>
<p>Looking at the test in the code (btl_openib_component.c):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ((rd_num - rd_low) &gt; rd_win) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;non  
<br>
optimal rd_win&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;true, rd_win, rd_num - rd_low);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>So the change in the help message is correct -- it is better when  
<br>
rd_win is bigger than (rd_num - rd_low).
<br>
<p>Ralph -- were you running with a non-default btl_openib_receive_queues?
<br>
<p><p><p>On Jul 28, 2008, at 10:17 AM, Adrian Knoth wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Jul 28, 2008 at 05:14:29PM +0300, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -advisable to configure rd_win smaller then (rd_num - rd_low), but  
</span><br>
<span class="quotelev2">&gt;&gt; currently
</span><br>
<span class="quotelev2">&gt;&gt; +advisable to configure rd_win bigger then (rd_num - rd_low), but  
</span><br>
<span class="quotelev2">&gt;&gt; currently
</span><br>
<span class="quotelev1">&gt;                                          ^ a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4457.php">Ralph Castain: "Re: [OMPI devel] Funny warning message"</a>
<li><strong>Previous message:</strong> <a href="4455.php">Jeff Squyres: "[OMPI devel] RFC: MCA DSO filename"</a>
<li><strong>In reply to:</strong> <a href="4454.php">Adrian Knoth: "Re: [OMPI devel] Funny warning message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4457.php">Ralph Castain: "Re: [OMPI devel] Funny warning message"</a>
<li><strong>Reply:</strong> <a href="4457.php">Ralph Castain: "Re: [OMPI devel] Funny warning message"</a>
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
