<?
$subject_val = "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  9 20:21:47 2009" -->
<!-- isoreceived="20090210012147" -->
<!-- sent="Mon, 9 Feb 2009 20:21:42 -0500 (EST)" -->
<!-- isosent="20090210012142" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8" -->
<!-- id="alpine.DEB.1.10.0902091950240.12644_at_marvin.we-be-smart.org" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="1D367926756E9848BABD800E249AA5E042656A_at_NASCMEX01.na.mscsoftware.com" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-09 20:21:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8003.php">Brett Pemberton: "[OMPI users] undefined symbol: tm_init"</a>
<li><strong>Previous message:</strong> <a href="8001.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<li><strong>In reply to:</strong> <a href="8000.php">Joe Griffin: "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8004.php">Joe Griffin: "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<li><strong>Reply:</strong> <a href="8004.php">Joe Griffin: "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Joe -
<br>
<p>There are two different files being discussed, which might be the cause of 
<br>
the confusion.  And this is really complicated, undocumented code I'm 
<br>
shamefully responsible for, so the confusion is quite understandable :).
<br>
<p>There's asm.c, which on all non-Sparc v8 platforms just pre-processes down 
<br>
to the line:
<br>
<p>&nbsp;&nbsp;&nbsp;#include &quot;opal/sys/atomic.h&quot;
<br>
<p>That header file includes all the inlined versions of the assembly, if the 
<br>
compiler is detected as supporting inline assembly.
<br>
<p>There's then atomic-asm.S, which on all platforms is an assembly file 
<br>
(obviously) of all the functions which would be defined by 
<br>
opal/sys/atomic.h, to help deal with weird compilerisms.  This file is 
<br>
generated from opal/sys/atomic.h by hand, which is a pain.  The file is 
<br>
then preprocessed at configure time to generate a file that should work 
<br>
with the given compiler.
<br>
<p>Anyway, that describes the difference between your two commands, the one 
<br>
that works and the one that doesn't.  Why there's a failure, I'm not sure 
<br>
and unfortunately, I dont' have time to look into it in detail for the 
<br>
next month or so (in that mad, must finish dissertation this month, mode).
<br>
<p>Brian
<br>
<p>On Mon, 9 Feb 2009, Joe Griffin wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tony,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My compile line with the error was the following. I believe the one you
</span><br>
<span class="quotelev1">&gt; had with the error was similar:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; icc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include
</span><br>
<span class="quotelev1">&gt; -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa
</span><br>
<span class="quotelev1">&gt; -I../.. \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -MT
</span><br>
<span class="quotelev1">&gt; atomic-asm.lo -MD -MP -MF .deps/atomic-asm.Tpo -c atomic-asm.S -fPIC
</span><br>
<span class="quotelev1">&gt; -DPIC -o .libs/atomic-asm.o
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, your 1.2.8 output had:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; icc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include
</span><br>
<span class="quotelev1">&gt; -I../../ompi/include -I../.. \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread
</span><br>
<span class="quotelev1">&gt; -MT asm.lo -MD -MP -MF .deps/asm.Tpo -c asm.c&#160; -fPIC -DPIC -o .libs/asm.o
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I use these options, the error goes away.&#160; Here is output from my
</span><br>
<span class="quotelev1">&gt; screen:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ia64b &lt;94&gt; pwd
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /scratch/open13/openmpi-1.3/opal/asm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ia64b &lt;95&gt; icc -DHAVE_CONFIG_H -I. -I../../opal/include
</span><br>
<span class="quotelev1">&gt; -I../../orte/include -I../../ompi/include
</span><br>
<span class="quotelev1">&gt; -I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict -MT atomic-asm.lo -MD
</span><br>
<span class="quotelev1">&gt; -MP -MF .deps/atomic-asm.Tpo -c atomic-asm.S -fPIC -DPIC -o
</span><br>
<span class="quotelev1">&gt; .libs/atomic-asm.o
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /scratch/icc777XKf.s(1) : error A2040: Unexpected token: Unary Diez
</span><br>
<span class="quotelev1">&gt; Operator at: Start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /scratch/icc777XKf.s(2) : error A2040: Unexpected token: Unary Diez
</span><br>
<span class="quotelev1">&gt; Operator at: Start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /scratch/icc777XKf.s(3) : error A2040: Unexpected token: Unary Diez
</span><br>
<span class="quotelev1">&gt; Operator at: Start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /scratch/icc777XKf.s(4) : error A2040: Unexpected token: Unary Diez
</span><br>
<span class="quotelev1">&gt; Operator at: Start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .libs/atomic-asm.o - 4 error(s), 0 warning(s)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ia64b &lt;96&gt; icc -DHAVE_CONFIG_H -I. -I../../opal/include
</span><br>
<span class="quotelev1">&gt; -I../../orte/include -I../../ompi/include -I../.. -O3 -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -finline-functions -fno-strict-aliasing -restrict -pthread -MT asm.lo -MD
</span><br>
<span class="quotelev1">&gt; -MP -MF .deps/asm.Tpo -c asm.c&#160; -fPIC -DPIC -o .libs/asm.o
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ia64b &lt;97&gt; ls -l .libs/asm.o
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -rw-r--r--&#160; 1 jjg develop 472 Feb&#160; 9 16:27 .libs/asm.o
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So ? for some reasons the compiler options changed.&#160;&#160; Can you please
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. cd into the ?/opal/asm directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Issue the BAD command I have at my prompt 95 and verify the error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Issue the GOOD command I have at my prompt 96 and verify it works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now .. as to why the options are different .. .I don?t know.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just trying to help,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Joe
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________________________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Iannetti, Anthony C. (GRC-RTB0)
</span><br>
<span class="quotelev1">&gt; Sent: Monday, February 09, 2009 6:10 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have attached the ./configure and make all output for version 1.2.8 as
</span><br>
<span class="quotelev1">&gt; directed in the Open MPI &quot;Getting Help&quot; section.&#160;&#160; Hopefully, this will
</span><br>
<span class="quotelev1">&gt; guide us on what is going on with the 1.3 assembler code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tony
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anthony C. Iannetti, P.E.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NASA Glenn Research Center
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aeropropulsion Division, Combustion Branch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 21000 Brookpark Road, MS 5-10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cleveland, OH 44135
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; phone: (216)433-5586
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; email: Anthony.C.Iannetti_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please note:&#160; All opinions expressed in this message are my own and NOT
</span><br>
<span class="quotelev1">&gt; of NASA.&#160; Only the NASA Administrator can speak on behalf of NASA.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8003.php">Brett Pemberton: "[OMPI users] undefined symbol: tm_init"</a>
<li><strong>Previous message:</strong> <a href="8001.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<li><strong>In reply to:</strong> <a href="8000.php">Joe Griffin: "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8004.php">Joe Griffin: "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<li><strong>Reply:</strong> <a href="8004.php">Joe Griffin: "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
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
