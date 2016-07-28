<?
$subject_val = "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  9 18:28:45 2009" -->
<!-- isoreceived="20090209232845" -->
<!-- sent="Mon, 9 Feb 2009 15:25:10 -0800" -->
<!-- isosent="20090209232510" -->
<!-- name="Joe Griffin" -->
<!-- email="joe.griffin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8" -->
<!-- id="1D367926756E9848BABD800E249AA5E042656A_at_NASCMEX01.na.mscsoftware.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="ED10C43789120F4F9E75FFE0BB9FB3E90F7AD919D5_at_NDJSSCC02.ndc.nasa.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8<br>
<strong>From:</strong> Joe Griffin (<em>joe.griffin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-09 18:25:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8001.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<li><strong>Previous message:</strong> <a href="7999.php">Kersey Black: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<li><strong>In reply to:</strong> <a href="7998.php">Iannetti, Anthony C. (GRC-RTB0): "[OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8002.php">Brian W. Barrett: "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<li><strong>Reply:</strong> <a href="8002.php">Brian W. Barrett: "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<li><strong>Reply:</strong> <a href="8005.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tony,
<br>
<p>&nbsp;
<br>
<p>My compile line with the error was the following. I believe the one you
<br>
had with the error was similar:
<br>
<p>&nbsp;
<br>
<p>icc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include
<br>
-I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-I../.. \
<br>
<p>-O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -MT
<br>
atomic-asm.lo -MD -MP -MF .deps/atomic-asm.Tpo -c atomic-asm.S -fPIC
<br>
-DPIC -o .libs/atomic-asm.o
<br>
<p>&nbsp;
<br>
<p>However, your 1.2.8 output had:
<br>
<p>&nbsp;
<br>
<p>icc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include
<br>
-I../../ompi/include -I../.. \
<br>
<p>-O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread
<br>
-MT asm.lo -MD -MP -MF .deps/asm.Tpo -c asm.c  -fPIC -DPIC -o
<br>
.libs/asm.o
<br>
<p>&nbsp;
<br>
<p>If I use these options, the error goes away.  Here is output from my
<br>
screen:
<br>
<p>&nbsp;
<br>
<p>ia64b &lt;94&gt; pwd
<br>
<p>/scratch/open13/openmpi-1.3/opal/asm
<br>
<p>&nbsp;
<br>
<p>ia64b &lt;95&gt; icc -DHAVE_CONFIG_H -I. -I../../opal/include
<br>
-I../../orte/include -I../../ompi/include
<br>
-I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -O3 -DNDEBUG
<br>
-finline-functions -fno-strict-aliasing -restrict -MT atomic-asm.lo -MD
<br>
-MP -MF .deps/atomic-asm.Tpo -c atomic-asm.S -fPIC -DPIC -o
<br>
.libs/atomic-asm.o
<br>
<p>/scratch/icc777XKf.s(1) : error A2040: Unexpected token: Unary Diez
<br>
Operator at: Start
<br>
<p>/scratch/icc777XKf.s(2) : error A2040: Unexpected token: Unary Diez
<br>
Operator at: Start
<br>
<p>/scratch/icc777XKf.s(3) : error A2040: Unexpected token: Unary Diez
<br>
Operator at: Start
<br>
<p>/scratch/icc777XKf.s(4) : error A2040: Unexpected token: Unary Diez
<br>
Operator at: Start
<br>
<p>.libs/atomic-asm.o - 4 error(s), 0 warning(s)
<br>
<p>&nbsp;
<br>
<p>ia64b &lt;96&gt; icc -DHAVE_CONFIG_H -I. -I../../opal/include
<br>
-I../../orte/include -I../../ompi/include -I../.. -O3 -DNDEBUG
<br>
-finline-functions -fno-strict-aliasing -restrict -pthread -MT asm.lo
<br>
-MD -MP -MF .deps/asm.Tpo -c asm.c  -fPIC -DPIC -o .libs/asm.o
<br>
<p>&nbsp;
<br>
<p>ia64b &lt;97&gt; ls -l .libs/asm.o
<br>
<p>-rw-r--r--  1 jjg develop 472 Feb  9 16:27 .libs/asm.o
<br>
<p>&nbsp;
<br>
<p>So ... for some reasons the compiler options changed.   Can you please
<br>
<p>&nbsp;
<br>
<p>1. cd into the .../opal/asm directory
<br>
<p>2. Issue the BAD command I have at my prompt 95 and verify the error.
<br>
<p>3. Issue the GOOD command I have at my prompt 96 and verify it works.
<br>
<p>&nbsp;
<br>
<p>Now .. as to why the options are different .. .I don't know.
<br>
<p>&nbsp;
<br>
<p>Just trying to help,
<br>
<p>Joe
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>________________________________
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Iannetti, Anthony C. (GRC-RTB0)
<br>
Sent: Monday, February 09, 2009 6:10 AM
<br>
To: Open MPI Users
<br>
Subject: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8
<br>
<p>&nbsp;
<br>
<p>I have attached the ./configure and make all output for version 1.2.8 as
<br>
directed in the Open MPI &quot;Getting Help&quot; section.   Hopefully, this will
<br>
guide us on what is going on with the 1.3 assembler code.
<br>
<p>&nbsp;
<br>
<p>Tony
<br>
<p>&nbsp;
<br>
<p>Anthony C. Iannetti, P.E.
<br>
<p>NASA Glenn Research Center
<br>
<p>Aeropropulsion Division, Combustion Branch
<br>
<p>21000 Brookpark Road, MS 5-10
<br>
<p>Cleveland, OH 44135
<br>
<p>phone: (216)433-5586
<br>
<p>email: Anthony.C.Iannetti_at_[hidden]
<br>
<p>&nbsp;
<br>
<p>Please note:  All opinions expressed in this message are my own and NOT
<br>
of NASA.  Only the NASA Administrator can speak on behalf of NASA.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8000/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8001.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<li><strong>Previous message:</strong> <a href="7999.php">Kersey Black: "Re: [OMPI users] Job hangs when daemon does not report back from remote machine"</a>
<li><strong>In reply to:</strong> <a href="7998.php">Iannetti, Anthony C. (GRC-RTB0): "[OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8002.php">Brian W. Barrett: "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<li><strong>Reply:</strong> <a href="8002.php">Brian W. Barrett: "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<li><strong>Reply:</strong> <a href="8005.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
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
