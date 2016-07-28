<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 19 10:05:09 2007" -->
<!-- isoreceived="20070319140509" -->
<!-- sent="Mon, 19 Mar 2007 07:05:03 -0700 (PDT)" -->
<!-- isosent="20070319140503" -->
<!-- name="Bala" -->
<!-- email="cppbala_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted takes 100 percent cpu, how to avoid this??" -->
<!-- id="802098.74558.qm_at_web35109.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51430E51-B7A4-4FEF-8CDA-29BD26C637DA_at_open-mpi.org" -->
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
<strong>From:</strong> Bala (<em>cppbala_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-19 10:05:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2839.php">Jeff Squyres: "Re: [OMPI users] Build problem with the pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="2837.php">Tim Prins: "Re: [OMPI users] remote execution problem"</a>
<li><strong>In reply to:</strong> <a href="2834.php">Tim Prins: "Re: [OMPI users] orted takes 100 percent cpu, how to avoid this??"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Tim, for the info and suggestion.
<br>
<p>Bala.
<br>
<p>--- Tim Prins &lt;tprins_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Bala,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a known problem with the 1.1 series. The bad
</span><br>
<span class="quotelev1">&gt; news is that I  
</span><br>
<span class="quotelev1">&gt; know of no fix for this, though many people work
</span><br>
<span class="quotelev1">&gt; around this problem  
</span><br>
<span class="quotelev1">&gt; by running a cleanup script after each unclean run.
</span><br>
<span class="quotelev1">&gt; The good news is  
</span><br>
<span class="quotelev1">&gt; that the 1.2 series is MUCH better, though still not
</span><br>
<span class="quotelev1">&gt; perfect. I would  
</span><br>
<span class="quotelev1">&gt; suggest trying out 1.2 and seeing if it works for
</span><br>
<span class="quotelev1">&gt; you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 17, 2007, at 9:58 AM, Bala wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi All,
</span><br>
<span class="quotelev2">&gt; &gt;        we have installed 16 node Intel X86_64
</span><br>
<span class="quotelev2">&gt; &gt; dual CPU and dual core cluster( blade servers)
</span><br>
<span class="quotelev2">&gt; &gt; with OFED-1.1, that installs OpenMPI as well.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  we are able to run some sample programs also,
</span><br>
<span class="quotelev2">&gt; &gt; after few time when we run the sample and do
</span><br>
<span class="quotelev2">&gt; &gt; some Ctrl+C to stop the program we notice that
</span><br>
<span class="quotelev2">&gt; &gt; some &quot;orted&quot; is still running and takes 100% cpu
</span><br>
<span class="quotelev2">&gt; &gt; as well.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. why some times this &quot;orted&quot; process not stopped
</span><br>
<span class="quotelev2">&gt; &gt;    and how to avoid this??
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2. we can kill with -9 option, but the problem is
</span><br>
<span class="quotelev2">&gt; &gt;   while running various OpenMPI programs we can
</span><br>
<span class="quotelev2">&gt; &gt;   see each one has one &quot;orted&quot;, don't know
</span><br>
<span class="quotelev2">&gt; &gt;   which process is idle to kill.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; regards,
</span><br>
<span class="quotelev2">&gt; &gt; Bala.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><p>&nbsp;
<br>
____________________________________________________________________________________
<br>
We won't tell. Get more on shows you hate to love 
<br>
(and love to hate): Yahoo! TV's Guilty Pleasures list.
<br>
<a href="http://tv.yahoo.com/collections/265">http://tv.yahoo.com/collections/265</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2839.php">Jeff Squyres: "Re: [OMPI users] Build problem with the pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="2837.php">Tim Prins: "Re: [OMPI users] remote execution problem"</a>
<li><strong>In reply to:</strong> <a href="2834.php">Tim Prins: "Re: [OMPI users] orted takes 100 percent cpu, how to avoid this??"</a>
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
