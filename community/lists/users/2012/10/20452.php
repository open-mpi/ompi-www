<?
$subject_val = "Re: [OMPI users] PAPI errors when compiling OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 10 10:44:55 2012" -->
<!-- isoreceived="20121010144455" -->
<!-- sent="Wed, 10 Oct 2012 10:44:50 -0400" -->
<!-- isosent="20121010144450" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PAPI errors when compiling OpenMPI" -->
<!-- id="55A0F1FF-DD3F-4283-9E09-1446875580CF_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CALd0-53nq0a=9UCwx7HdVMg6NV7VgX2NZR4LOFOrVVE6q09iMw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-10-10 10:44:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20453.php">Reuti: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Previous message:</strong> <a href="20451.php">Ralph Castain: "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<li><strong>In reply to:</strong> <a href="20450.php">Tohiko Looka: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Check out our version philosophy:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a>
<br>
<p><p>On Oct 10, 2012, at 10:27 AM, Tohiko Looka wrote:
<br>
<p><span class="quotelev1">&gt; Thanks a lot Jeff
</span><br>
<span class="quotelev1">&gt; 1.6.2 had similar problems but --disable-vt worked
</span><br>
<span class="quotelev1">&gt; Is there a page that tell what OpenMPI versions are compatible with
</span><br>
<span class="quotelev1">&gt; each other? (In the sense that they can communicate with each other)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 9, 2012 at 6:42 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 9, 2012, at 11:34 AM, Tohiko Looka wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mmm... The problem is I already have applications/nodes that use 1.5.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and upgrading might be difficult.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, Open MPI 1.5.4 is binary compatible with Open MPI 1.6.2.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is strange because it works on other nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps you have different versions of PAPI on your nodes...?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will try to check if 1.6.2 compiles anyways
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Worst case, you can ./configure --disable-vt to disable the (optional) Vampir Trace package.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your reply,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Oct 9, 2012 at 5:11 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please try upgrading to Open MPI 1.6.2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Oct 8, 2012, at 6:34 PM, Tohiko Looka wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Greetings,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am trying to compile openmpi-1.5.4, while it usually works out fine
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it is failing on a specific node.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The error is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vt_metric_papi.c:262: error: too many arguments to function &#145;PAPI_perror&#146;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; vt_metric_papi.c: In function &#145;metric_warning&#146;:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Of course configure runs successfully.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="20453.php">Reuti: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<li><strong>Previous message:</strong> <a href="20451.php">Ralph Castain: "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<li><strong>In reply to:</strong> <a href="20450.php">Tohiko Looka: "Re: [OMPI users] PAPI errors when compiling OpenMPI"</a>
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
