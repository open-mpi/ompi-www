<?
$subject_val = "Re: [OMPI users] CMAQ crashes with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 10 12:15:01 2011" -->
<!-- isoreceived="20110810161501" -->
<!-- sent="Wed, 10 Aug 2011 12:14:56 -0400" -->
<!-- isosent="20110810161456" -->
<!-- name="Matthew Russell" -->
<!-- email="mrussel2_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CMAQ crashes with OpenMPI" -->
<!-- id="CAFmqpWqMsSceLGziSuU+Svycn5w3OyJFq1i06+zOvhRhtm2sHQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA67016B.6C59%bwbarre_at_sandia.gov" -->
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
<strong>From:</strong> Matthew Russell (<em>mrussel2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-10 12:14:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17048.php">CB: "Re: [OMPI users] scaling issue beyond 1024 processes"</a>
<li><strong>Previous message:</strong> <a href="17046.php">Matthew Russell: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="17040.php">Barrett, Brian W: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17046.php">Matthew Russell: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm, I didn't know that.  Is OS X's small stack something that can be
<br>
alleviated with &quot;ulimit&quot; in bash?  Right now, I have my ulimit set to
<br>
unlimited.  Does this still work with OpenMPI?  (I might be wrong, but
<br>
doesn't MPI work over TCP, such that new spawned processes on my host
<br>
wouldn't be affected by my bash settings?)
<br>
<p>What is discouraging and possibly related is, one member of my research
<br>
group has to set, unset and reset her ulimit on OS X (Snow Leopard) when
<br>
running this model statically.  I haven't experienced the same, but it gives
<br>
me an impression that something on her computer of OS is very finicky.
<br>
<p>I'm going to try re-building OpenMPI to ensure that everything I am using is
<br>
built with the same compiler (PGI), and then if (when) I run into this error
<br>
again, I'll run the debugger as you suggested below.
<br>
<p>Thanks!
<br>
<p>On Tue, Aug 9, 2011 at 5:27 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The error message looks like it's no where near an MPI function; I would
</span><br>
<span class="quotelev1">&gt; guess that this is not an Open MPI problem but, particularly given your
</span><br>
<span class="quotelev1">&gt; statements about Snow Leopard) a CMAQ problem.  The easiest way to debug
</span><br>
<span class="quotelev1">&gt; on OS X is to launch the application code in a debugger, something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpirun -np 2 xterm -e gdb &lt;app&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One thing that can get people on OS X is that the maximum stack size is
</span><br>
<span class="quotelev1">&gt; extremely small compared to Linux.  Fortran apps, in particular, can end
</span><br>
<span class="quotelev1">&gt; up putting things on the stack which cause an overrun and all kinds of fun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/9/11 3:18 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;Also, please be aware that we haven't done any testing of OMPI on Lion,
</span><br>
<span class="quotelev2">&gt; &gt;so this is truly new ground.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;On Aug 9, 2011, at 3:00 PM, Doug Reeder wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Matt,
</span><br>
<span class="quotelev2">&gt; &gt;Are you sure you are building against your macports version of openmpi
</span><br>
<span class="quotelev2">&gt; &gt;and not the one that ships w/ lion. In the trace back are items 4-9, that
</span><br>
<span class="quotelev2">&gt; &gt;end w/ x86_64pg from the pgi compiler. You said you are using pgf90 and
</span><br>
<span class="quotelev2">&gt; &gt;pgcc but in the configure input it looks like gcc is being used on lion.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Doug Reeder
</span><br>
<span class="quotelev2">&gt; &gt;On Aug 9, 2011, at 1:49 PM, Matthew Russell wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Hi,
</span><br>
<span class="quotelev2">&gt; &gt;I'm trying to run CMAQ - an air quality model developed by the US EPA -
</span><br>
<span class="quotelev2">&gt; &gt;on a Mac (Lion) using OpenMPI (1.5.3) installed with MacPorts.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I am able to run CMAQ in parallel, and am able to run small programs that
</span><br>
<span class="quotelev2">&gt; &gt;use OpenMPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I set the OpenMPI environment variables to use pgf90/pgcc (10.9) as my
</span><br>
<span class="quotelev2">&gt; &gt;compiler.  Using PGI because some of the code I need to build is fortran
</span><br>
<span class="quotelev2">&gt; &gt;77 ( *sigh* ), and for some other reasons.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;The error I get is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;/opt/local/lib/openmpi/bin/mpirun -v -machinefile
</span><br>
<span class="quotelev2">&gt; &gt;/Users/matt/cmaq/darwin11/scripts/cctm/machines8 -np 2
</span><br>
<span class="quotelev2">&gt; &gt;/Users/matt/cmaq/darwin11/scripts/cctm/CCTM_e1a_Darwin11_x86_64pg
</span><br>
<span class="quotelev2">&gt; &gt;[pontus:72547] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt;[pontus:72547] Signal: Segmentation fault: 11 (11)
</span><br>
<span class="quotelev2">&gt; &gt;[pontus:72547] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt;[pontus:72547] Failing at address: 0x0
</span><br>
<span class="quotelev2">&gt; &gt;[pontus:72547] [ 0] 2   libsystem_c.dylib
</span><br>
<span class="quotelev2">&gt; &gt;0x00007fff91065cfa _sigtramp + 26
</span><br>
<span class="quotelev2">&gt; &gt;[pontus:72547] [ 1] 3   ???
</span><br>
<span class="quotelev2">&gt; &gt;0x00007fff5fbe58ab 0x0 + 140734799698091
</span><br>
<span class="quotelev2">&gt; &gt;[pontus:72547] [ 2] 4   CCTM_e1a_Darwin11_x86_64pg
</span><br>
<span class="quotelev2">&gt; &gt;0x000000010003c89b distr_env_ + 971
</span><br>
<span class="quotelev2">&gt; &gt;[pontus:72547] [ 3] 5   CCTM_e1a_Darwin11_x86_64pg
</span><br>
<span class="quotelev2">&gt; &gt;0x000000010003cbe5 par_init_ + 565
</span><br>
<span class="quotelev2">&gt; &gt;[pontus:72547] [ 4] 6   CCTM_e1a_Darwin11_x86_64pg
</span><br>
<span class="quotelev2">&gt; &gt;0x0000000100032e1b MAIN_ + 219
</span><br>
<span class="quotelev2">&gt; &gt;[pontus:72547] [ 5] 7   CCTM_e1a_Darwin11_x86_64pg
</span><br>
<span class="quotelev2">&gt; &gt;0x00000001000016f6 main + 70
</span><br>
<span class="quotelev2">&gt; &gt;[pontus:72547] [ 6] 8   CCTM_e1a_Darwin11_x86_64pg
</span><br>
<span class="quotelev2">&gt; &gt;0x000000010000163a _start + 248
</span><br>
<span class="quotelev2">&gt; &gt;[pontus:72547] [ 7] 9   CCTM_e1a_Darwin11_x86_64pg
</span><br>
<span class="quotelev2">&gt; &gt;0x0000000100001541 start + 33
</span><br>
<span class="quotelev2">&gt; &gt;[pontus:72547] [ 8] 10  ???
</span><br>
<span class="quotelev2">&gt; &gt;0x0000000000000001 0x0 + 1
</span><br>
<span class="quotelev2">&gt; &gt;[pontus:72547] *** End of error message ***
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;mpirun noticed that process rank 1 with PID 72547 on node
</span><br>
<span class="quotelev2">&gt; &gt;pontus.cee.carleton.ca &lt;<a href="http://pontus.cee.carleton.ca/">http://pontus.cee.carleton.ca/</a>&gt; exited on signal
</span><br>
<span class="quotelev2">&gt; &gt;11 (Segmentation fault: 11).
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I don't expect anyone to know the solution from this brief error message,
</span><br>
<span class="quotelev2">&gt; &gt;however I was wondering if anyone has insight on how I might debug this?
</span><br>
<span class="quotelev2">&gt; &gt;I am too new to both OpenMPI and CMAQ to be served that well from this
</span><br>
<span class="quotelev2">&gt; &gt;traceback.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I'm told by others in my research group that CMAQ with OpenMPI on Linux
</span><br>
<span class="quotelev2">&gt; &gt;works fine, and that the error I'm getting is very similar to the error
</span><br>
<span class="quotelev2">&gt; &gt;others got when trying this on a Mac (Snow Leopard) with ifort.. before
</span><br>
<span class="quotelev2">&gt; &gt;they gave up...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;OpenMPI was configured with:
</span><br>
<span class="quotelev2">&gt; &gt;configure.args  --sysconfdir=${prefix}/etc/${name} \
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                --includedir=${prefix}/include/${name} \
</span><br>
<span class="quotelev2">&gt; &gt;                --bindir=${prefix}/lib/${name}/bin \
</span><br>
<span class="quotelev2">&gt; &gt;                --mandir=${prefix}/share/man \
</span><br>
<span class="quotelev2">&gt; &gt;                --with-memory-manager=none
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;# enable build on Lion
</span><br>
<span class="quotelev2">&gt; &gt;if {$os.major} &gt;= 11} {
</span><br>
<span class="quotelev2">&gt; &gt;        configure.compiler       gcc-4.2
</span><br>
<span class="quotelev2">&gt; &gt;}
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;The --with-memory-manager is there because I saw it fix potentially
</span><br>
<span class="quotelev2">&gt; &gt;similar problems in other postings to this Mailing list.  It didn't make
</span><br>
<span class="quotelev2">&gt; &gt;a difference though.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17047/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17048.php">CB: "Re: [OMPI users] scaling issue beyond 1024 processes"</a>
<li><strong>Previous message:</strong> <a href="17046.php">Matthew Russell: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="17040.php">Barrett, Brian W: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17046.php">Matthew Russell: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
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
