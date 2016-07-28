<?
$subject_val = "Re: [OMPI users] PAPI errors when compiling OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  9 11:42:55 2012" -->
<!-- isoreceived="20121009154255" -->
<!-- sent="Tue, 9 Oct 2012 11:42:50 -0400" -->
<!-- isosent="20121009154250" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PAPI errors when compiling OpenMPI" -->
<!-- id="FAC65DD2-C27A-41B2-A39E-BFFDAA143ED8_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CALd0-53GG5Zksuqs70JczBYxNjaTL+p+n1WGz8kQhgRs+7E14A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] PAPI errors when compiling OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-09 11:42:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20439.php">Thomas Evangelidis: "[OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
<li><strong>Previous message:</strong> <a href="20437.php">Tohiko Looka: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20437.php">Tohiko Looka: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20450.php">Tohiko Looka: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
<li><strong>Reply:</strong> <a href="20450.php">Tohiko Looka: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 9, 2012, at 11:34 AM, Tohiko Looka wrote:
<br>
<p><span class="quotelev1">&gt; Mmm... The problem is I already have applications/nodes that use 1.5.4
</span><br>
<span class="quotelev1">&gt; and upgrading might be difficult.
</span><br>
<p>FWIW, Open MPI 1.5.4 is binary compatible with Open MPI 1.6.2.
<br>
<p><span class="quotelev1">&gt; It is strange because it works on other nodes.
</span><br>
<p>Perhaps you have different versions of PAPI on your nodes...?
<br>
<p><span class="quotelev1">&gt; I will try to check if 1.6.2 compiles anyways
</span><br>
<p>Worst case, you can ./configure --disable-vt to disable the (optional) Vampir Trace package.
<br>
<p><span class="quotelev1">&gt; Thanks for your reply,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 9, 2012 at 5:11 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Please try upgrading to Open MPI 1.6.2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 8, 2012, at 6:34 PM, Tohiko Looka wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greetings,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to compile openmpi-1.5.4, while it usually works out fine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is failing on a specific node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The error is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_metric_papi.c:262: error: too many arguments to function &#145;PAPI_perror&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vt_metric_papi.c: In function &#145;metric_warning&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Of course configure runs successfully.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any ideas?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20439.php">Thomas Evangelidis: "[OMPI users] undefined reference to `__intel_sse2_strlen'"</a>
<li><strong>Previous message:</strong> <a href="20437.php">Tohiko Looka: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="20437.php">Tohiko Looka: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20450.php">Tohiko Looka: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
<li><strong>Reply:</strong> <a href="20450.php">Tohiko Looka: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
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
