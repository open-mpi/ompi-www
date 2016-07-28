<?
$subject_val = "Re: [OMPI users] problem with rankfile";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  5 08:57:12 2012" -->
<!-- isoreceived="20120905125712" -->
<!-- sent="Wed, 5 Sep 2012 14:50:16 +0200 (CEST)" -->
<!-- isosent="20120905125016" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with rankfile" -->
<!-- id="201209051250.q85CoGba020881_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] problem with rankfile" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with rankfile<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-05 08:50:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20129.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Previous message:</strong> <a href="20127.php">Yevgeny Kliteynik: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Maybe in reply to:</strong> <a href="20102.php">Siegmar Gross: "[OMPI users] problem with rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20129.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Reply:</strong> <a href="20129.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm new to rankfiles so that I played a little bit with different
<br>
options. I thought that the following entry would be similar to an
<br>
entry in an appfile and that MPI could place the process with rank 0
<br>
on any core of any processor.
<br>
<p>rank 0=tyr.informatik.hs-fulda.de
<br>
<p>Unfortunately it's not allowed and I got an error. Can somebody add
<br>
the missing help to the file?
<br>
<p><p>tyr small_prog 126 mpiexec -rf my_rankfile -report-bindings rank_size
<br>
--------------------------------------------------------------------------
<br>
Sorry!  You were supposed to get help about:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;no-slot-list
<br>
from the file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;help-rmaps_rank_file.txt
<br>
But I couldn't find that topic in the file.  Sorry!
<br>
--------------------------------------------------------------------------
<br>
<p><p>As you can see below I could use a rankfile on my old local machine
<br>
(Sun Ultra 45) but not on our &quot;new&quot; one (Sun Server M4000). Today I
<br>
logged into the machine via ssh and tried the same command once more
<br>
as a local user without success. It's more or less the same error as
<br>
before when I tried to bind the process to a remote machine.
<br>
<p>rs0 small_prog 118 mpiexec -rf my_rankfile -report-bindings rank_size
<br>
[rs0.informatik.hs-fulda.de:13745] [[19734,0],0] odls:default:fork
<br>
&nbsp;&nbsp;binding child [[19734,1],0] to slot_list 0:0
<br>
--------------------------------------------------------------------------
<br>
We were unable to successfully process/set the requested processor
<br>
affinity settings:
<br>
<p>Specified slot list: 0:0
<br>
Error: Cross-device link
<br>
<p>This could mean that a non-existent processor was specified, or
<br>
that the specification had improper syntax.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec was unable to start the specified application as it encountered an error:
<br>
<p>Error name: No such file or directory
<br>
Node: rs0.informatik.hs-fulda.de
<br>
<p>when attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
rs0 small_prog 119 
<br>
<p><p>The application is available.
<br>
<p>rs0 small_prog 119 which rank_size
<br>
/home/fd1026/SunOS/sparc/bin/rank_size
<br>
<p><p>Is it a problem in the Open MPI implementation or in my rankfile?
<br>
How can I request which sockets and cores per socket are
<br>
available so that I can use correct values in my rankfile?
<br>
In lam-mpi I had a command &quot;lamnodes&quot; which I could use to get
<br>
such information. Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev2">&gt; &gt; Are *all* the machines Sparc? Or just the 3rd one (rs0)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, both machines are Sparc. I tried first in a homogeneous
</span><br>
<span class="quotelev1">&gt; environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 106 psrinfo -v
</span><br>
<span class="quotelev1">&gt; Status of virtual processor 0 as of: 09/04/2012 07:32:14
</span><br>
<span class="quotelev1">&gt;   on-line since 08/31/2012 15:44:42.
</span><br>
<span class="quotelev1">&gt;   The sparcv9 processor operates at 1600 MHz,
</span><br>
<span class="quotelev1">&gt;         and has a sparcv9 floating point processor.
</span><br>
<span class="quotelev1">&gt; Status of virtual processor 1 as of: 09/04/2012 07:32:14
</span><br>
<span class="quotelev1">&gt;   on-line since 08/31/2012 15:44:39.
</span><br>
<span class="quotelev1">&gt;   The sparcv9 processor operates at 1600 MHz,
</span><br>
<span class="quotelev1">&gt;         and has a sparcv9 floating point processor.
</span><br>
<span class="quotelev1">&gt; tyr fd1026 107 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My local machine (tyr) is a dual processor machine and the
</span><br>
<span class="quotelev1">&gt; other one is equipped with two quad-core processors each
</span><br>
<span class="quotelev1">&gt; capable of running two hardware threads.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 3, 2012, at 12:43 PM, Siegmar Gross 
</span><br>
<span class="quotelev1">&gt; &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the man page for &quot;mpiexec&quot; shows the following:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         cat myrankfile
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         rank 0=aa slot=1:0-2
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         rank 1=bb slot=0:0,1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         rank 2=cc slot=1-2
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         mpirun -H aa,bb,cc,dd -rf myrankfile ./a.out So that
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       Rank 0 runs on node aa, bound to socket 1, cores 0-2.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       Rank 1 runs on node bb, bound to socket 0, cores 0 and 1.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       Rank 2 runs on node cc, bound to cores 1 and 2.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Does it mean that the process with rank 0 should be bound to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; core 0, 1, or 2 of socket 1?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I tried to use a rankfile and have a problem. My rankfile contains
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the following lines.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rank 0=tyr.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; rank 1=tyr.informatik.hs-fulda.de slot=1:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #rank 2=rs0.informatik.hs-fulda.de slot=0:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Everything is fine if I use the file with just my local machine
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (the first two lines).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr small_prog 115 mpiexec -report-bindings -rf my_rankfile rank_size
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr.informatik.hs-fulda.de:01133] [[9849,0],0]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  odls:default:fork binding child [[9849,1],0] to slot_list 0:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr.informatik.hs-fulda.de:01133] [[9849,0],0]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  odls:default:fork binding child [[9849,1],1] to slot_list 1:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm process 0 of 2 available processes running on 
</span><br>
<span class="quotelev1">&gt; tyr.informatik.hs-fulda.de.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm process 1 of 2 available processes running on 
</span><br>
<span class="quotelev1">&gt; tyr.informatik.hs-fulda.de.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr small_prog 116 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I can also change the socket number and the processes will be attached
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to the correct cores. Unfortunately it doesn't work if I add one
</span><br>
<span class="quotelev3">&gt; &gt; &gt; other machine (third line).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr small_prog 112 mpiexec -report-bindings -rf my_rankfile rank_size
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; We were unable to successfully process/set the requested processor
</span><br>
<span class="quotelev3">&gt; &gt; &gt; affinity settings:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Specified slot list: 0:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Error: Cross-device link
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This could mean that a non-existent processor was specified, or
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that the specification had improper syntax.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  odls:default:fork binding child [[10212,1],0] to slot_list 0:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  odls:default:fork binding child [[10212,1],1] to slot_list 1:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [rs0.informatik.hs-fulda.de:12047] [[10212,0],1]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  odls:default:fork binding child [[10212,1],2] to slot_list 0:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  ORTE_ERROR_LOG: A message is attempting to be sent to a process
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  whose contact information is unknown in file
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  ../../../../../openmpi-1.6/orte/mca/rml/oob/rml_oob_send.c at line 145
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0] attempted to send
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  to [[10212,1],0]: tag 20
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [tyr.informatik.hs-fulda.de:01520] [[10212,0],0] ORTE_ERROR_LOG:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  A message is attempting to be sent to a process whose contact
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  information is unknown in file
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  ../../../../openmpi-1.6/orte/mca/odls/base/odls_base_default_fns.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  at line 2501
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpiexec was unable to start the specified application as it
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  encountered an error:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Error name: Error 0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Node: rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; when attempting to start process rank 2.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr small_prog 113 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The other machine has two 8 core processors.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr small_prog 121 ssh rs0 psrinfo -v
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Status of virtual processor 0 as of: 09/03/2012 19:51:15
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  on-line since 07/26/2012 15:03:14.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  The sparcv9 processor operates at 2400 MHz,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        and has a sparcv9 floating point processor.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Status of virtual processor 1 as of: 09/03/2012 19:51:15
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Status of virtual processor 15 as of: 09/03/2012 19:51:15
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  on-line since 07/26/2012 15:03:16.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  The sparcv9 processor operates at 2400 MHz,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        and has a sparcv9 floating point processor.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tyr small_prog 122 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is it necessary to specify another option on the command line or
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is my rankfile faulty? Thank you very much for any suggestions in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; advance.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Kind regards
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Siegmar
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20129.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Previous message:</strong> <a href="20127.php">Yevgeny Kliteynik: "Re: [OMPI users] OMPI 1.6.x Hang on khugepaged 100% CPU time"</a>
<li><strong>Maybe in reply to:</strong> <a href="20102.php">Siegmar Gross: "[OMPI users] problem with rankfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20129.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
<li><strong>Reply:</strong> <a href="20129.php">Ralph Castain: "Re: [OMPI users] problem with rankfile"</a>
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
