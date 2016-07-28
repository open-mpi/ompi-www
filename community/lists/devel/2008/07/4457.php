<?
$subject_val = "Re: [OMPI devel] Funny warning message";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 10:28:02 2008" -->
<!-- isoreceived="20080728142802" -->
<!-- sent="Mon, 28 Jul 2008 08:27:51 -0600" -->
<!-- isosent="20080728142751" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Funny warning message" -->
<!-- id="E831815F-DE17-4363-AB9C-25EA438DF130_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C279507A-4D51-4119-8185-AB5453C2F0F7_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 10:27:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4458.php">Brad Benton: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4456.php">Jeff Squyres: "Re: [OMPI devel] Funny warning message"</a>
<li><strong>In reply to:</strong> <a href="4456.php">Jeff Squyres: "Re: [OMPI devel] Funny warning message"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 28, 2008, at 8:22 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I think Lenny is pointing out that &quot;smaller&quot; got changed to  
</span><br>
<span class="quotelev1">&gt; &quot;bigger&quot;, too.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the test in the code (btl_openib_component.c):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;            if ((rd_num - rd_low) &gt; rd_win) {
</span><br>
<span class="quotelev1">&gt;                orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;non  
</span><br>
<span class="quotelev1">&gt; optimal rd_win&quot;,
</span><br>
<span class="quotelev1">&gt;                        true, rd_win, rd_num - rd_low);
</span><br>
<span class="quotelev1">&gt;            }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the change in the help message is correct -- it is better when  
</span><br>
<span class="quotelev1">&gt; rd_win is bigger than (rd_num - rd_low).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph -- were you running with a non-default  
</span><br>
<span class="quotelev1">&gt; btl_openib_receive_queues?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Yep...was using a queue layout from Brad that is pretty complex. I was  
<br>
just pointing out that the warning's stated condition was met, so  
<br>
either the warning text is wrong or the test that generates it is wrong.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2008, at 10:17 AM, Adrian Knoth wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Jul 28, 2008 at 05:14:29PM +0300, Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -advisable to configure rd_win smaller then (rd_num - rd_low), but  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; currently
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +advisable to configure rd_win bigger then (rd_num - rd_low), but  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; currently
</span><br>
<span class="quotelev2">&gt;&gt;                                         ^ a
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev2">&gt;&gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4458.php">Brad Benton: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4456.php">Jeff Squyres: "Re: [OMPI devel] Funny warning message"</a>
<li><strong>In reply to:</strong> <a href="4456.php">Jeff Squyres: "Re: [OMPI devel] Funny warning message"</a>
<!-- nextthread="start" -->
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
