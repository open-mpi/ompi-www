<?
$subject_val = "Re: [OMPI users] Checkpoint/Restart error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 08:07:07 2010" -->
<!-- isoreceived="20100115130707" -->
<!-- sent="Fri, 15 Jan 2010 21:07:02 +0800" -->
<!-- isosent="20100115130702" -->
<!-- name="Andreea Costea" -->
<!-- email="andre.costea_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint/Restart error" -->
<!-- id="68119efe1001150507n1e446bc2i83816ab709185591_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="68119efe1001142115h7e7ec6b5j5cae6044f90bbb75_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-01-15 08:07:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11793.php">Jed Brown: "Re: [OMPI users] More NetBSD fixes"</a>
<li><strong>Previous message:</strong> <a href="11791.php">Roman Martonak: "[OMPI users] dynamic rules"</a>
<li><strong>In reply to:</strong> <a href="11786.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11796.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Reply:</strong> <a href="11796.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Reply:</strong> <a href="11798.php">Jeff Squyres: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried the new version, that was uploaded today. I still have that error,
<br>
just that now is at line 405 instead of 399.
<br>
<p>Maybe if I give more details:
<br>
- I first had OpenMPI version 1.3.3 with BLCR installed: mpirun,
<br>
ompi-checkpoint and ompi-restart worked with that version.
<br>
- I wanted to update to version 1.4.1 and I uninstalled previous version
<br>
like this: make uninstall, and than manually deleted all the left over
<br>
files. the directory where I installed was /usr/local
<br>
- I installed 1.4.1 in the same directory: /usr/locale. paths set correctly
<br>
to usr/local/bin and /usr/local/lib
<br>
- mpirun works, ompi-checkpoint gives the following error:
<br>
[[35906,0],0] ORTE_ERROR_LOG: Not found in file orte-checkpoint.c at line
<br>
405
<br>
HNP with PID 7899 Not found!
<br>
<p>I would appreciate any help,
<br>
Andreea
<br>
<p><p>On Fri, Jan 15, 2010 at 1:15 PM, Andreea Costea &lt;andre.costea_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi...
</span><br>
<span class="quotelev1">&gt; still not working. Though I uninstalled OpenMPI with make uninstall and I
</span><br>
<span class="quotelev1">&gt; manually deleted all other files, I still have the same error when
</span><br>
<span class="quotelev1">&gt; checkpointing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andreea
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 14, 2010 at 10:38 PM, Joshua Hursey &lt;jjhursey_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 14, 2010, at 8:20 AM, Andreea Costea wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I wanted to try the C/R feature in OpenMPI version 1.4.1 that I have
</span><br>
<span class="quotelev2">&gt;&gt; downloaded today. When I want to checkpoint I am having the following error
</span><br>
<span class="quotelev2">&gt;&gt; message:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; [[65192,0],0] ORTE_ERROR_LOG: Not found in file orte-checkpoint.c at
</span><br>
<span class="quotelev2">&gt;&gt; line 399
</span><br>
<span class="quotelev3">&gt;&gt; &gt; HNP with PID 2337 Not found!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This looks like an error coming from the 1.3.3 install. In 1.4.1 there is
</span><br>
<span class="quotelev2">&gt;&gt; no error at line 399, in 1.3.3 there is. Check your installation of Open
</span><br>
<span class="quotelev2">&gt;&gt; MPI, I bet you are mixing 1.4.1 and 1.3.3, which can cause unexpected
</span><br>
<span class="quotelev2">&gt;&gt; problems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try a clean installation of 1.4.1 and double check that 1.3.3 is not in
</span><br>
<span class="quotelev2">&gt;&gt; your path/lib_path any longer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I tried the same thing with version 1.3.3 and it works perfectly.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Any idea why?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; thanks,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Andreea
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11792/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11793.php">Jed Brown: "Re: [OMPI users] More NetBSD fixes"</a>
<li><strong>Previous message:</strong> <a href="11791.php">Roman Martonak: "[OMPI users] dynamic rules"</a>
<li><strong>In reply to:</strong> <a href="11786.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11796.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Reply:</strong> <a href="11796.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Reply:</strong> <a href="11798.php">Jeff Squyres: "Re: [OMPI users] Checkpoint/Restart error"</a>
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
