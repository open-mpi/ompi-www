<?
$subject_val = "Re: [OMPI users] Joe Griffin: &quot;Re:	Cannotcompile	onLinuxItanium	system&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 01:09:36 2009" -->
<!-- isoreceived="20090205060936" -->
<!-- sent="Thu, 5 Feb 2009 00:09:29 -0600" -->
<!-- isosent="20090205060929" -->
<!-- name="Iannetti, Anthony C. (GRC-RTB0)" -->
<!-- email="Anthony.C.Iannetti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Joe Griffin: &amp;quot;Re:	Cannotcompile	onLinuxItanium	system&amp;quot;" -->
<!-- id="ED10C43789120F4F9E75FFE0BB9FB3E90F7AD4FAFB_at_NDJSSCC02.ndc.nasa.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1D367926756E9848BABD800E249AA5E0426484_at_NASCMEX01.na.mscsoftware.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Joe Griffin: &quot;Re:	Cannotcompile	onLinuxItanium	system&quot;<br>
<strong>From:</strong> Iannetti, Anthony C. (GRC-RTB0) (<em>Anthony.C.Iannetti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-05 01:09:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7969.php">Robertson Burgess: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>Previous message:</strong> <a href="7967.php">Kiril Dichev: "[OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<li><strong>In reply to:</strong> <a href="7965.php">Joe Griffin: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannotcompile	onLinuxItanium	system&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Joe,
<br>
<p>&nbsp;&nbsp;I will send my 1.2.8 compile log later today.
<br>
<p>Tony
<br>
<p><p><p>Anthony C. Iannetti, P.E.
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
<p>Please note:  All opinions expressed in this message are my own and NOT of NASA.  Only the NASA Administrator can speak on behalf of NASA.
<br>
<p><p><p>________________________________
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Joe Griffin
<br>
Sent: Wednesday, February 04, 2009 10:12 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Joe Griffin: &quot;Re: Cannotcompile onLinuxItanium system&quot;
<br>
<p><p>Tony,
<br>
<p><p><p>The compile line that failed on 1.3 was:
<br>
<p><p><p>ia64b &lt;103&gt; pwd
<br>
<p>/scratch/open13/openmpi-1.3/opal/asm
<br>
<p><p><p>ia64b &lt;104&gt; icc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -restrict -MT atomic-asm.lo -MD -MP -MF .deps/atomic-asm.Tpo -c atomic-asm.S -fPIC -DPIC -o .libs/atomic-asm.o
<br>
<p>/scratch/icczv4akh.s(1) : error A2040: Unexpected token: Unary Diez Operator at: Start
<br>
<p>/scratch/icczv4akh.s(2) : error A2040: Unexpected token: Unary Diez Operator at: Start
<br>
<p>/scratch/icczv4akh.s(3) : error A2040: Unexpected token: Unary Diez Operator at: Start
<br>
<p>/scratch/icczv4akh.s(4) : error A2040: Unexpected token: Unary Diez Operator at: Start
<br>
<p>.libs/atomic-asm.o - 4 error(s), 0 warning(s)
<br>
<p><p><p><p><p>I got an error on the above line with 1.2.2 ( I haven't tried 1.2.8 ).
<br>
<p><p><p>Do you have an equivalent in your log?
<br>
<p>What happens if you issue the equivalent in 1.2.8?
<br>
<p><p><p>Joe
<br>
<p><p><p><p><p><p><p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<p><span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<p><span class="quotelev1">&gt; Behalf Of Iannetti, Anthony C. (GRC-RTB0)
</span><br>
<p><span class="quotelev1">&gt; Sent: Wednesday, February 04, 2009 2:27 AM
</span><br>
<p><span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<p><span class="quotelev1">&gt; Subject: Re: [OMPI users] Joe Griffin: &quot;Re: Cannotcompile onLinuxItanium
</span><br>
<p><span class="quotelev1">&gt; system&quot;
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;    For your information, I was able to compile 1.2.8 using Intel 10.1
</span><br>
<p><span class="quotelev1">&gt; compilers.
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; Tony
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; Anthony C. Iannetti, P.E.
</span><br>
<p><span class="quotelev1">&gt; NASA Glenn Research Center
</span><br>
<p><span class="quotelev1">&gt; Aeropropulsion Division, Combustion Branch
</span><br>
<p><span class="quotelev1">&gt; 21000 Brookpark Road, MS 5-10
</span><br>
<p><span class="quotelev1">&gt; Cleveland, OH 44135
</span><br>
<p><span class="quotelev1">&gt; phone: (216)433-5586
</span><br>
<p><span class="quotelev1">&gt; email: Anthony.C.Iannetti_at_[hidden]
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; Please note:  All opinions expressed in this message are my own and NOT of
</span><br>
<p><span class="quotelev1">&gt; NASA.  Only the NASA Administrator can speak on behalf of NASA.
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev2">&gt; &gt;-----Original Message-----
</span><br>
<p><span class="quotelev2">&gt; &gt;From: users-bounces_at_[hidden]
</span><br>
<p><span class="quotelev2">&gt; &gt;[mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres
</span><br>
<p><span class="quotelev2">&gt; &gt;Sent: Tuesday, February 03, 2009 9:27 AM
</span><br>
<p><span class="quotelev2">&gt; &gt;To: Open MPI Users
</span><br>
<p><span class="quotelev2">&gt; &gt;Subject: Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile
</span><br>
<p><span class="quotelev2">&gt; &gt;onLinuxItanium system&quot;
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt;On Feb 2, 2009, at 1:27 PM, Joe Griffin wrote:
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev3">&gt; &gt;&gt; Hi Jeff and Tony,
</span><br>
<p><span class="quotelev3">&gt; &gt;&gt;
</span><br>
<p><span class="quotelev3">&gt; &gt;&gt; I just tried 1.2.2 on my Itanium and got the same error.
</span><br>
<p><span class="quotelev3">&gt; &gt;&gt;
</span><br>
<p><span class="quotelev3">&gt; &gt;&gt; Our code uses 1.2.2, but I built it back in 2007 with
</span><br>
<p><span class="quotelev3">&gt; &gt;&gt; V8 of the compiler.  Now I am using V10.1.  So, perhaps the code is
</span><br>
<p><span class="quotelev3">&gt; &gt;&gt; incompatible with Intel V10.1.
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt;(on Itanium)
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt;Ah ha, that makes a much more plausible explanation...
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt;I had a few off-list offers to give me access to Itanium
</span><br>
<p><span class="quotelev2">&gt; &gt;systems; many thanks to all of you who offered.
</span><br>
<p><span class="quotelev2">&gt; &gt;Unfortunately, I don't have the resources/time/expertise to
</span><br>
<p><span class="quotelev2">&gt; &gt;make this fix (I know just about zero about assembly,
</span><br>
<p><span class="quotelev2">&gt; &gt;particularly with all the different cross-platform/ compiler
</span><br>
<p><span class="quotelev2">&gt; &gt;compatibility issues).  Does anyone else have both access and
</span><br>
<p><span class="quotelev2">&gt; &gt;expertise to fix this issue?
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt;--
</span><br>
<p><span class="quotelev2">&gt; &gt;Jeff Squyres
</span><br>
<p><span class="quotelev2">&gt; &gt;Cisco Systems
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<p><span class="quotelev2">&gt; &gt;users mailing list
</span><br>
<p><span class="quotelev2">&gt; &gt;users_at_[hidden]
</span><br>
<p><span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<p><span class="quotelev1">&gt; users mailing list
</span><br>
<p><span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<p><span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7968/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7969.php">Robertson Burgess: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>Previous message:</strong> <a href="7967.php">Kiril Dichev: "[OMPI users] Problems in 1.3 loading shared libs when using VampirServer"</a>
<li><strong>In reply to:</strong> <a href="7965.php">Joe Griffin: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannotcompile	onLinuxItanium	system&quot;"</a>
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
