<?
$subject_val = "Re: [OMPI users] CMAQ crashes with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  9 17:00:34 2011" -->
<!-- isoreceived="20110809210034" -->
<!-- sent="Tue, 9 Aug 2011 14:00:28 -0700" -->
<!-- isosent="20110809210028" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CMAQ crashes with OpenMPI" -->
<!-- id="654C1759-84C4-4351-9B77-BC02EC39E539_at_cox.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFmqpWoow9ZUFTu2CMYyobsN749mPGaPyTuF7-h3H=38+AE8xg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] CMAQ crashes with OpenMPI<br>
<strong>From:</strong> Doug Reeder (<em>dlr1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-09 17:00:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17039.php">Ralph Castain: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17037.php">Matthew Russell: "[OMPI users] CMAQ crashes with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="17037.php">Matthew Russell: "[OMPI users] CMAQ crashes with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17039.php">Ralph Castain: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="17039.php">Ralph Castain: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="17044.php">Matthew Russell: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Matt,
<br>
<p>Are you sure you are building against your macports version of openmpi and not the one that ships w/ lion. In the trace back are items 4-9, that end w/ x86_64pg from the pgi compiler. You said you are using pgf90 and pgcc but in the configure input it looks like gcc is being used on lion.
<br>
<p>Doug Reeder
<br>
On Aug 9, 2011, at 1:49 PM, Matthew Russell wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to run CMAQ - an air quality model developed by the US EPA - on a Mac (Lion) using OpenMPI (1.5.3) installed with MacPorts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am able to run CMAQ in parallel, and am able to run small programs that use OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I set the OpenMPI environment variables to use pgf90/pgcc (10.9) as my compiler.  Using PGI because some of the code I need to build is fortran 77 ( *sigh* ), and for some other reasons. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error I get is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/local/lib/openmpi/bin/mpirun -v -machinefile /Users/matt/cmaq/darwin11/scripts/cctm/machines8 -np 2 /Users/matt/cmaq/darwin11/scripts/cctm/CCTM_e1a_Darwin11_x86_64pg
</span><br>
<span class="quotelev1">&gt; [pontus:72547] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [pontus:72547] Signal: Segmentation fault: 11 (11)
</span><br>
<span class="quotelev1">&gt; [pontus:72547] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [pontus:72547] Failing at address: 0x0
</span><br>
<span class="quotelev1">&gt; [pontus:72547] [ 0] 2   libsystem_c.dylib                   0x00007fff91065cfa _sigtramp + 26
</span><br>
<span class="quotelev1">&gt; [pontus:72547] [ 1] 3   ???                                 0x00007fff5fbe58ab 0x0 + 140734799698091
</span><br>
<span class="quotelev1">&gt; [pontus:72547] [ 2] 4   CCTM_e1a_Darwin11_x86_64pg          0x000000010003c89b distr_env_ + 971
</span><br>
<span class="quotelev1">&gt; [pontus:72547] [ 3] 5   CCTM_e1a_Darwin11_x86_64pg          0x000000010003cbe5 par_init_ + 565
</span><br>
<span class="quotelev1">&gt; [pontus:72547] [ 4] 6   CCTM_e1a_Darwin11_x86_64pg          0x0000000100032e1b MAIN_ + 219
</span><br>
<span class="quotelev1">&gt; [pontus:72547] [ 5] 7   CCTM_e1a_Darwin11_x86_64pg          0x00000001000016f6 main + 70
</span><br>
<span class="quotelev1">&gt; [pontus:72547] [ 6] 8   CCTM_e1a_Darwin11_x86_64pg          0x000000010000163a _start + 248
</span><br>
<span class="quotelev1">&gt; [pontus:72547] [ 7] 9   CCTM_e1a_Darwin11_x86_64pg          0x0000000100001541 start + 33
</span><br>
<span class="quotelev1">&gt; [pontus:72547] [ 8] 10  ???                                 0x0000000000000001 0x0 + 1
</span><br>
<span class="quotelev1">&gt; [pontus:72547] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 1 with PID 72547 on node pontus.cee.carleton.ca exited on signal 11 (Segmentation fault: 11).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't expect anyone to know the solution from this brief error message, however I was wondering if anyone has insight on how I might debug this?  I am too new to both OpenMPI and CMAQ to be served that well from this traceback.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm told by others in my research group that CMAQ with OpenMPI on Linux works fine, and that the error I'm getting is very similar to the error others got when trying this on a Mac (Snow Leopard) with ifort.. before they gave up...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI was configured with:
</span><br>
<span class="quotelev1">&gt; configure.args  --sysconfdir=${prefix}/etc/${name} \
</span><br>
<span class="quotelev1">&gt;                 --includedir=${prefix}/include/${name} \
</span><br>
<span class="quotelev1">&gt;                 --bindir=${prefix}/lib/${name}/bin \
</span><br>
<span class="quotelev1">&gt;                 --mandir=${prefix}/share/man \
</span><br>
<span class="quotelev1">&gt;                 --with-memory-manager=none
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # enable build on Lion
</span><br>
<span class="quotelev1">&gt; if {$os.major} &gt;= 11} {
</span><br>
<span class="quotelev1">&gt;         configure.compiler       gcc-4.2
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The --with-memory-manager is there because I saw it fix potentially similar problems in other postings to this Mailing list.  It didn't make a difference though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17038/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17039.php">Ralph Castain: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17037.php">Matthew Russell: "[OMPI users] CMAQ crashes with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="17037.php">Matthew Russell: "[OMPI users] CMAQ crashes with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17039.php">Ralph Castain: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="17039.php">Ralph Castain: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="17044.php">Matthew Russell: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
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
