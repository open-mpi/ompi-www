<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 27 13:15:39 2006" -->
<!-- isoreceived="20060927171539" -->
<!-- sent="Wed, 27 Sep 2006 19:15:40 +0200" -->
<!-- isosent="20060927171540" -->
<!-- name="Laurent.POREZ_at_[hidden]" -->
<!-- email="Laurent.POREZ_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn_multiple and BProc" -->
<!-- id="2F8EE677D406514ABE53EF9C0934A666061BA26C_at_anubis2.clb.tcfr.thales" -->
<!-- inreplyto="[OMPI users] MPI_Comm_spawn_multiple and BProc" -->
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
<strong>From:</strong> <a href="mailto:Laurent.POREZ_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI_Comm_spawn_multiple%20and%20BProc"><em>Laurent.POREZ_at_[hidden]</em></a><br>
<strong>Date:</strong> 2006-09-27 13:15:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1902.php">Glenn Johnson: "[OMPI users] using both 64 and 32 bit mpi"</a>
<li><strong>Previous message:</strong> <a href="1900.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn_multiple and BProc"</a>
<li><strong>Maybe in reply to:</strong> <a href="1899.php">Laurent.POREZ_at_[hidden]: "[OMPI users] MPI_Comm_spawn_multiple and BProc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oups, sorry !
<br>
<p>I followed these steps :
<br>
<p>1) Install a debian system (sarge 3.1r2).
<br>
<p>2) Use a 2.6.9 kernel patched with bproc 4.0.0pre8 (<a href="http://bproc.sourceforge.net">http://bproc.sourceforge.net</a>)
<br>
the options CONFIG_BPROC, CONFIG_ROMFS_FS, CONFIG_BLK_DEV_RAM, CONFIG_BLK_DEV_INITRD, CONFIG_TMPFS where activated via the 'make menuconfig' command.
<br>
<p>3) install bproc 4.0.0.pre8
<br>
<p>4) install beoboot-cm1.10
<br>
<p>5) load bproc modules
<br>
<p>6) Install open-mpi V1.1.1
<br>
<p>Hope this will help.
<br>
<p>Thanks, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Laurent.
<br>
<p><p><p>------------------------------------------
<br>
<p>Could you please clarify - what &quot;Bproc kernel patch&quot; are you referring to?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On 9/27/06 2:37 AM, &quot;Laurent.POREZ_at_[hidden]&quot;
<br>
&lt;Laurent.POREZ_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using MPI_Comm_spawn_multiple with Open MPI 1.1.1.
</span><br>
<span class="quotelev1">&gt; It used to work well, until I used the Bproc kernel patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I use the Bproc patch, my program freezes when calling
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn_multiple.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does MPI_Comm_spawn_multiple and BProc can work together ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, 
</span><br>
<span class="quotelev1">&gt; Laurent Porez
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1902.php">Glenn Johnson: "[OMPI users] using both 64 and 32 bit mpi"</a>
<li><strong>Previous message:</strong> <a href="1900.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn_multiple and BProc"</a>
<li><strong>Maybe in reply to:</strong> <a href="1899.php">Laurent.POREZ_at_[hidden]: "[OMPI users] MPI_Comm_spawn_multiple and BProc"</a>
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
