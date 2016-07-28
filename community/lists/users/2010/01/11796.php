<?
$subject_val = "Re: [OMPI users] Checkpoint/Restart error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 09:21:30 2010" -->
<!-- isoreceived="20100115142130" -->
<!-- sent="Fri, 15 Jan 2010 22:21:24 +0800" -->
<!-- isosent="20100115142124" -->
<!-- name="Andreea Costea" -->
<!-- email="andre.costea_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint/Restart error" -->
<!-- id="68119efe1001150621w2d345182m69fecc67d1779733_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="68119efe1001150507n1e446bc2i83816ab709185591_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-01-15 09:21:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11797.php">Roman Martonak: "Re: [OMPI users] dynamic rules"</a>
<li><strong>Previous message:</strong> <a href="11795.php">Daniel Sp&#229;ngberg: "Re: [OMPI users] dynamic rules"</a>
<li><strong>In reply to:</strong> <a href="11792.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11798.php">Jeff Squyres: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know what else should I try... because it worked on 1.3.3 doing
<br>
exactly the same steps. I tried to install it both with an active eth
<br>
interface and an inactive one. I am running on a virtual machine that has
<br>
CentOS as OS.
<br>
<p>Any suggestions?
<br>
<p>Thanks,
<br>
Andreea
<br>
<p>On Fri, Jan 15, 2010 at 9:07 PM, Andreea Costea &lt;andre.costea_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; I tried the new version, that was uploaded today. I still have that error,
</span><br>
<span class="quotelev1">&gt; just that now is at line 405 instead of 399.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe if I give more details:
</span><br>
<span class="quotelev1">&gt; - I first had OpenMPI version 1.3.3 with BLCR installed: mpirun,
</span><br>
<span class="quotelev1">&gt; ompi-checkpoint and ompi-restart worked with that version.
</span><br>
<span class="quotelev1">&gt; - I wanted to update to version 1.4.1 and I uninstalled previous version
</span><br>
<span class="quotelev1">&gt; like this: make uninstall, and than manually deleted all the left over
</span><br>
<span class="quotelev1">&gt; files. the directory where I installed was /usr/local
</span><br>
<span class="quotelev1">&gt; - I installed 1.4.1 in the same directory: /usr/locale. paths set
</span><br>
<span class="quotelev1">&gt; correctly  to usr/local/bin and /usr/local/lib
</span><br>
<span class="quotelev1">&gt; - mpirun works, ompi-checkpoint gives the following error:
</span><br>
<span class="quotelev1">&gt; [[35906,0],0] ORTE_ERROR_LOG: Not found in file orte-checkpoint.c at line
</span><br>
<span class="quotelev1">&gt; 405
</span><br>
<span class="quotelev1">&gt; HNP with PID 7899 Not found!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would appreciate any help,
</span><br>
<span class="quotelev1">&gt; Andreea
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 15, 2010 at 1:15 PM, Andreea Costea &lt;andre.costea_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi...
</span><br>
<span class="quotelev2">&gt;&gt; still not working. Though I uninstalled OpenMPI with make uninstall and I
</span><br>
<span class="quotelev2">&gt;&gt; manually deleted all other files, I still have the same error when
</span><br>
<span class="quotelev2">&gt;&gt; checkpointing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any idea?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Andreea
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jan 14, 2010 at 10:38 PM, Joshua Hursey &lt;jjhursey_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 14, 2010, at 8:20 AM, Andreea Costea wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I wanted to try the C/R feature in OpenMPI version 1.4.1 that I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; downloaded today. When I want to checkpoint I am having the following error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [[65192,0],0] ORTE_ERROR_LOG: Not found in file orte-checkpoint.c at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line 399
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; HNP with PID 2337 Not found!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This looks like an error coming from the 1.3.3 install. In 1.4.1 there is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; no error at line 399, in 1.3.3 there is. Check your installation of Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI, I bet you are mixing 1.4.1 and 1.3.3, which can cause unexpected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Try a clean installation of 1.4.1 and double check that 1.3.3 is not in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your path/lib_path any longer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I tried the same thing with version 1.3.3 and it works perfectly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Any idea why?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Andreea
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11796/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11797.php">Roman Martonak: "Re: [OMPI users] dynamic rules"</a>
<li><strong>Previous message:</strong> <a href="11795.php">Daniel Sp&#229;ngberg: "Re: [OMPI users] dynamic rules"</a>
<li><strong>In reply to:</strong> <a href="11792.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11798.php">Jeff Squyres: "Re: [OMPI users] Checkpoint/Restart error"</a>
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
