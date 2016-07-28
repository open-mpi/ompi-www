<?
$subject_val = "Re: [OMPI users] Checkpoint/Restart error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 00:15:49 2010" -->
<!-- isoreceived="20100115051549" -->
<!-- sent="Fri, 15 Jan 2010 13:15:44 +0800" -->
<!-- isosent="20100115051544" -->
<!-- name="Andreea Costea" -->
<!-- email="andre.costea_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint/Restart error" -->
<!-- id="68119efe1001142115h7e7ec6b5j5cae6044f90bbb75_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="888FA576-8C55-4E35-B343-6BD78D9D1E0E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpoint/Restart error<br>
<strong>From:</strong> Andreea Costea (<em>andre.costea_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-15 00:15:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11787.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Previous message:</strong> <a href="11785.php">Jeff Squyres: "Re: [OMPI users] More NetBSD fixes"</a>
<li><strong>In reply to:</strong> <a href="11769.php">Joshua Hursey: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11792.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Reply:</strong> <a href="11792.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi...
<br>
still not working. Though I uninstalled OpenMPI with make uninstall and I
<br>
manually deleted all other files, I still have the same error when
<br>
checkpointing.
<br>
<p>Any idea?
<br>
<p>Thanks,
<br>
Andreea
<br>
<p><p>On Thu, Jan 14, 2010 at 10:38 PM, Joshua Hursey &lt;jjhursey_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 14, 2010, at 8:20 AM, Andreea Costea wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I wanted to try the C/R feature in OpenMPI version 1.4.1 that I have
</span><br>
<span class="quotelev1">&gt; downloaded today. When I want to checkpoint I am having the following error
</span><br>
<span class="quotelev1">&gt; message:
</span><br>
<span class="quotelev2">&gt; &gt; [[65192,0],0] ORTE_ERROR_LOG: Not found in file orte-checkpoint.c at line
</span><br>
<span class="quotelev1">&gt; 399
</span><br>
<span class="quotelev2">&gt; &gt; HNP with PID 2337 Not found!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This looks like an error coming from the 1.3.3 install. In 1.4.1 there is
</span><br>
<span class="quotelev1">&gt; no error at line 399, in 1.3.3 there is. Check your installation of Open
</span><br>
<span class="quotelev1">&gt; MPI, I bet you are mixing 1.4.1 and 1.3.3, which can cause unexpected
</span><br>
<span class="quotelev1">&gt; problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Try a clean installation of 1.4.1 and double check that 1.3.3 is not in
</span><br>
<span class="quotelev1">&gt; your path/lib_path any longer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried the same thing with version 1.3.3 and it works perfectly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any idea why?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Andreea
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11786/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11787.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ... (cont.)"</a>
<li><strong>Previous message:</strong> <a href="11785.php">Jeff Squyres: "Re: [OMPI users] More NetBSD fixes"</a>
<li><strong>In reply to:</strong> <a href="11769.php">Joshua Hursey: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11792.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Reply:</strong> <a href="11792.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
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
