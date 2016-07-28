<?
$subject_val = "Re: [OMPI users] OpenMPI-Ranking problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  9 07:55:50 2010" -->
<!-- isoreceived="20100609115550" -->
<!-- sent="Wed, 9 Jun 2010 17:25:44 +0530" -->
<!-- isosent="20100609115544" -->
<!-- name="Chamila Janath" -->
<!-- email="chamila.janath_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-Ranking problem" -->
<!-- id="AANLkTimJmqF2G9t8CbgWQUXjngaGs9ZVp_YxLvZMGO22_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C0E72D1.3090405_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI-Ranking problem<br>
<strong>From:</strong> Chamila Janath (<em>chamila.janath_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-09 07:55:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13270.php">Jeff Squyres: "Re: [OMPI users] Collective component priorities and sm"</a>
<li><strong>Previous message:</strong> <a href="13268.php">Jeff Squyres: "Re: [OMPI users] problem with the mpirun"</a>
<li><strong>In reply to:</strong> <a href="13257.php">Terry Dontje: "Re: [OMPI users] OpenMPI-Ranking problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Sir/Madam,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I'm running OpenMPI 1.4.2 version. The operation system is Ubuntu 9.10
<br>
with kernel version 2.6.31-14.
<br>
<p>$ mpirun -np 1 -cpus-per-proc 1 -bind-to-core a.out
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* This works fine on single core P4 machine.*
<br>
<p><p><p>$ mpirun -np 1 -bind-to-core a.out
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*This also works fine.*
<br>
<p>$ mpirun -np 1 -cpus-per-proc 1 -bind-to-core a.out
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*   This too works fine sir/madam.*
<br>
<p>*But i specified rank file as,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank 0=127.0.0.1 slot=0*
<br>
<p>Run the app as,
<br>
<p>$ *mpirun -np 1 -rf rankfile a.out*
<br>
<p>It gives,
<br>
<p>[ucsc-laptop:03027] *** Process received signal ***
<br>
[ucsc-laptop:03027] Signal: Segmentation fault (11)
<br>
[ucsc-laptop:03027] Signal code: Address not mapped (1)
<br>
[ucsc-laptop:03027] Failing at address: 0x8
<br>
[ucsc-laptop:03027] [ 0] [0x867410]
<br>
[ucsc-laptop:03027] [ 1] a.out(main+0x5f) [0x8048843]
<br>
[ucsc-laptop:03027] [ 2]
<br>
/lib/tls/i686/cmov/libc.so.6(__libc_start_main+0xe6) [0x44cb56]
<br>
[ucsc-laptop:03027] [ 3] a.out [0x8048751]
<br>
[ucsc-laptop:03027] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 3027 on node ucsc-laptop exited
<br>
on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>and for the following execution,
<br>
<p>*$ mpirun -np 1 -rf rankfile --bind-to-core a.out*
<br>
<p>[ucsc-laptop:03053] *** Process received signal ***
<br>
[ucsc-laptop:03053] Signal: Segmentation fault (11)
<br>
[ucsc-laptop:03053] Signal code: Address not mapped (1)
<br>
[ucsc-laptop:03053] Failing at address: 0x8
<br>
[ucsc-laptop:03053] [ 0] [0xab0410]
<br>
[ucsc-laptop:03053] [ 1] a.out(main+0x5f) [0x8048843]
<br>
[ucsc-laptop:03053] [ 2]
<br>
/lib/tls/i686/cmov/libc.so.6(__libc_start_main+0xe6) [0x234b56]
<br>
[ucsc-laptop:03053] [ 3] a.out [0x8048751]
<br>
[ucsc-laptop:03053] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 3053 on node ucsc-laptop exited
<br>
on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p><p>*I need to execute my program in a manner that,*
<br>
<p>$ *mpirun -np 5 -rf rankfile a.out*
<br>
<p>Where rank file:
<br>
<p>rank 0=10.16.71.14 slot=0            # 10.16.71.14 is Duel core machine
<br>
rank 1=10.16.71.14 slot=1
<br>
rank 2=10.16.71.15 slot=0            # 10.16.71.15 is Duel core machine
<br>
rank 3=10.16.71.15 slot=1
<br>
rank 4=10.16.71.16 slot=0            # 10.16.71.16 is P4 machine with single
<br>
core
<br>
<p><p>This gives segmentation fault as *$mpirun -np 1 -rf rankfile a.out*
<br>
<p>But if i commented out the line *rank 4=10.16.71.16 slot=0*  and execute the
<br>
program as *$mpirun -np 4 -rf rankfile a.out* then it *executes fine.*
<br>
<p><p>Please help me. How can I overcome this.
<br>
<p>Yours faithfully,
<br>
Chamila Janath.
<br>
<p><p>On Tue, Jun 8, 2010 at 10:11 PM, Terry Dontje &lt;terry.dontje_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;  Which version of OMPI are you running on and the OS version?
</span><br>
<span class="quotelev1">&gt; Can you try and replace the rankfile specification with --bind-to-core and
</span><br>
<span class="quotelev1">&gt; tell me if that works any better?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Chamila Janath wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *rankfile*
</span><br>
<span class="quotelev1">&gt; rank 0=10.16.71.1 slot=0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I launched my mpi app using,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 1 -rf rankfile appname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can run the application on Intel dual-core machine with Linux based OS
</span><br>
<span class="quotelev1">&gt; nicely. But i can't run it on single core machine(P4).
</span><br>
<span class="quotelev1">&gt; The execution terminates specifying a problem of slot number. What is the
</span><br>
<span class="quotelev1">&gt; reason for this? A bug or problem of the slot number I specified.(I tried by
</span><br>
<span class="quotelev1">&gt; using rank 0=10.16.71.1 slot=p0:0 but it too failed)
</span><br>
<span class="quotelev1">&gt; Please help me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [image: Oracle]
</span><br>
<span class="quotelev1">&gt;   Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev1">&gt;  Oracle * - Performance Technologies*
</span><br>
<span class="quotelev1">&gt;  95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
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
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13269/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-13269/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13270.php">Jeff Squyres: "Re: [OMPI users] Collective component priorities and sm"</a>
<li><strong>Previous message:</strong> <a href="13268.php">Jeff Squyres: "Re: [OMPI users] problem with the mpirun"</a>
<li><strong>In reply to:</strong> <a href="13257.php">Terry Dontje: "Re: [OMPI users] OpenMPI-Ranking problem"</a>
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
