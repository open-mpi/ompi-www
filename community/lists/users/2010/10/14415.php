<?
$subject_val = "Re: [OMPI users] Pros and cons of --enable-heterogeneous";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  7 17:27:41 2010" -->
<!-- isoreceived="20101007212741" -->
<!-- sent="Thu, 07 Oct 2010 17:27:37 -0400" -->
<!-- isosent="20101007212737" -->
<!-- name="David Ronis" -->
<!-- email="David.Ronis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pros and cons of --enable-heterogeneous" -->
<!-- id="1286486857.28705.8.camel_at_ronispc.chem.mcgill.ca" -->
<!-- charset="ansi_x3.4-1968" -->
<!-- inreplyto="AANLkTi=NP=_f3vrk7aVgEZi4zr=sCw4WvThZMzGGGkL0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pros and cons of --enable-heterogeneous<br>
<strong>From:</strong> David Ronis (<em>David.Ronis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-07 17:27:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14416.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="14414.php">David Ronis: "[OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>In reply to:</strong> <a href="14412.php">Ralph Castain: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14418.php">Eugene Loh: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>Reply:</strong> <a href="14418.php">Eugene Loh: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph, thanks for the reply.   
<br>
<p>If I build with enable-heterogeneous and then decide to run on a
<br>
homogeneous set of nodes, does the additional &quot;overhead&quot; go away or
<br>
become completely negligible; i.e., if no conversion is necessary.
<br>
<p>David
<br>
<p><p>On Thu, 2010-10-07 at 15:17 -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hetero operations tend to lose a little performance due to the need to
</span><br>
<span class="quotelev1">&gt; convert data, but otherwise there is no real negative. We don't do it
</span><br>
<span class="quotelev1">&gt; by default solely because the majority of installations don't need to,
</span><br>
<span class="quotelev1">&gt; and there is no reason to lose even a little performance if it isn't
</span><br>
<span class="quotelev1">&gt; necessary.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you want an application to be able to span that mix, then you'll
</span><br>
<span class="quotelev1">&gt; need to set that configure flag.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 7, 2010 at 1:44 PM, David Ronis &lt;David.Ronis_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;         I have various boxes that run openmpi and I can't seem to use
</span><br>
<span class="quotelev1">&gt;         all of
</span><br>
<span class="quotelev1">&gt;         them at once because they have different CPU's (e.g.,
</span><br>
<span class="quotelev1">&gt;         pentiums, athlons
</span><br>
<span class="quotelev1">&gt;         (both 32 bit) vs Intel I7 (64 bit)).   I'm about the build
</span><br>
<span class="quotelev1">&gt;         1.4.3 and was
</span><br>
<span class="quotelev1">&gt;         wondering if I should add --enable-heterogenous to the
</span><br>
<span class="quotelev1">&gt;         configure flags.
</span><br>
<span class="quotelev1">&gt;         Any advice as to why or why not would be appreciated.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         David
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14416.php">Ralph Castain: "Re: [OMPI users] memory limits on remote nodes"</a>
<li><strong>Previous message:</strong> <a href="14414.php">David Ronis: "[OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>In reply to:</strong> <a href="14412.php">Ralph Castain: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14418.php">Eugene Loh: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
<li><strong>Reply:</strong> <a href="14418.php">Eugene Loh: "Re: [OMPI users] Pros and cons of --enable-heterogeneous"</a>
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
