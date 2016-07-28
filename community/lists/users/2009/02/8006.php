<?
$subject_val = "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 10 08:36:38 2009" -->
<!-- isoreceived="20090210133638" -->
<!-- sent="Tue, 10 Feb 2009 05:33:09 -0800" -->
<!-- isosent="20090210133309" -->
<!-- name="Joe Griffin" -->
<!-- email="joe.griffin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8" -->
<!-- id="1D367926756E9848BABD800E249AA5E04BFD30_at_NASCMEX01.na.mscsoftware.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="ED10C43789120F4F9E75FFE0BB9FB3E90F7ADD6B3F_at_NDJSSCC02.ndc.nasa.gov" -->
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
<strong>Date:</strong> 2009-02-10 08:33:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8007.php">Ralph Castain: "Re: [OMPI users] undefined symbol: tm_init"</a>
<li><strong>Previous message:</strong> <a href="8005.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<li><strong>In reply to:</strong> <a href="8005.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tony,
<br>
&nbsp;
<br>
Brian pointed out that the commands are compiling different items.
<br>
The issue is why is the atomic-asm.S not in the old make, but
<br>
is in the new make.
<br>
&nbsp;
<br>
Your logs have a lower case s, atomic-asm.s, but not an uppercase S:
<br>
&nbsp;
<br>
rm -f atomic-asm.s
<br>
ln -s &quot;../../opal/asm/generated/atomic-ia64-linux-nongas.s&quot; atomic-asm.s
<br>
/bin/sh ../../libtool   --mode=compile icc  -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -c -o atomic-asm.lo atomic-asm.s
<br>
libtool: compile:  icc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../.. -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread -MT asm.lo -MD -MP -MF .deps/asm.Tpo -c asm.c  -fPIC -DPIC -o .libs/asm.o
<br>
libtool: compile:  icc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -c atomic-asm.s  -fPIC -DPIC -o .libs/atomic-asm.o
<br>
/bin/sh ../../libtool --tag=CC   --mode=link icc  -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread  -export-dynamic   -o libasm.la  asm.lo atomic-asm.lo  -lnsl  -lutil
<br>
<p>&nbsp;
<br>
While the error is with the uppercase S.
<br>
&nbsp;
<br>
Joe
<br>
&nbsp;
<br>
<p>________________________________
<br>
<p>From: users-bounces_at_[hidden] on behalf of Iannetti, Anthony C. (GRC-RTB0)
<br>
Sent: Mon 2/9/2009 11:12 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8
<br>
<p><p>Joe,
<br>
&nbsp;
<br>
&nbsp;&nbsp;I will issue the command tomorrow and try to verify this problem.  Thank you for your help.
<br>
&nbsp;
<br>
Tony
<br>
&nbsp;
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
<p>Please note:  All opinions expressed in this message are my own and NOT of NASA.  Only the NASA Administrator can speak on behalf of NASA.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><p>________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Joe Griffin
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Monday, February 09, 2009 6:25 PM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: Open MPI Users
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tony,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My compile line with the error was the following. I believe the one you had with the error was similar:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;icc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. \
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -MT atomic-asm.lo -MD -MP -MF .deps/atomic-asm.Tpo -c atomic-asm.S -fPIC -DPIC -o .libs/atomic-asm.o
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;However, your 1.2.8 output had:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;icc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../.. \
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread -MT asm.lo -MD -MP -MF .deps/asm.Tpo -c asm.c  -fPIC -DPIC -o .libs/asm.o
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If I use these options, the error goes away.  Here is output from my screen:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ia64b &lt;94&gt; pwd
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/scratch/open13/openmpi-1.3/opal/asm
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ia64b &lt;95&gt; icc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -MT atomic-asm.lo -MD -MP -MF .deps/atomic-asm.Tpo -c atomic-asm.S -fPIC -DPIC -o .libs/atomic-asm.o
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/scratch/icc777XKf.s(1) : error A2040: Unexpected token: Unary Diez Operator at: Start
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/scratch/icc777XKf.s(2) : error A2040: Unexpected token: Unary Diez Operator at: Start
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/scratch/icc777XKf.s(3) : error A2040: Unexpected token: Unary Diez Operator at: Start
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/scratch/icc777XKf.s(4) : error A2040: Unexpected token: Unary Diez Operator at: Start
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.libs/atomic-asm.o - 4 error(s), 0 warning(s)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ia64b &lt;96&gt; icc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../.. -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -pthread -MT asm.lo -MD -MP -MF .deps/asm.Tpo -c asm.c  -fPIC -DPIC -o .libs/asm.o
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ia64b &lt;97&gt; ls -l .libs/asm.o
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-rw-r--r--  1 jjg develop 472 Feb  9 16:27 .libs/asm.o
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;So ... for some reasons the compiler options changed.   Can you please
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. cd into the .../opal/asm directory
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Issue the BAD command I have at my prompt 95 and verify the error.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Issue the GOOD command I have at my prompt 96 and verify it works.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Now .. as to why the options are different .. .I don't know.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Just trying to help,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Joe
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
________________________________
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Iannetti, Anthony C. (GRC-RTB0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent: Monday, February 09, 2009 6:10 AM
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To: Open MPI Users
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have attached the ./configure and make all output for version 1.2.8 as directed in the Open MPI &quot;Getting Help&quot; section.   Hopefully, this will guide us on what is going on with the 1.3 assembler code.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tony
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anthony C. Iannetti, P.E.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NASA Glenn Research Center
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aeropropulsion Division, Combustion Branch
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;21000 Brookpark Road, MS 5-10
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cleveland, OH 44135
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phone: (216)433-5586
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;email: Anthony.C.Iannetti_at_[hidden]
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please note:  All opinions expressed in this message are my own and NOT of NASA.  Only the NASA Administrator can speak on behalf of NASA.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8006/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8007.php">Ralph Castain: "Re: [OMPI users] undefined symbol: tm_init"</a>
<li><strong>Previous message:</strong> <a href="8005.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
<li><strong>In reply to:</strong> <a href="8005.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Linux Itanium Configure and Make Logs for 1.2.8"</a>
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
