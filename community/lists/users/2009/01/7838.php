<?
$subject_val = "Re: [OMPI users] Cannot compile on Linux Itanium system";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 14:58:05 2009" -->
<!-- isoreceived="20090126195805" -->
<!-- sent="Mon, 26 Jan 2009 11:55:36 -0800" -->
<!-- isosent="20090126195536" -->
<!-- name="Joe Griffin" -->
<!-- email="joe.griffin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot compile on Linux Itanium system" -->
<!-- id="1D367926756E9848BABD800E249AA5E0426331_at_NASCMEX01.na.mscsoftware.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6DCC07FC-230D-416E-B865-CDD92E412A3C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot compile on Linux Itanium system<br>
<strong>From:</strong> Joe Griffin (<em>joe.griffin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 14:55:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7839.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="7837.php">Don Kerr: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>In reply to:</strong> <a href="7835.php">Jeff Squyres: "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7848.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tony,
<br>
<p>&nbsp;
<br>
<p>I have a couple questions ... 
<br>
<p>&nbsp;
<br>
<p>1. It looks like you are creating atomic-asm.o with icc and not
<br>
<p>&nbsp;&nbsp;&nbsp;&quot;ias&quot;.  Is that correct?
<br>
<p>&nbsp;
<br>
<p>libtool: compile:  icc -DHAVE_CONFIG_H -I. -I../../opal/include
<br>
-I../../orte/include -I../../ompi/include
<br>
-I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -O3 -DNDEBUG
<br>
-finline-functions -fno-strict-aliasing -restrict -MT atomic-asm.lo -MD
<br>
-MP -MF .deps/atomic-asm.Tpo -c atomic-asm.S  -fPIC -DPIC -o
<br>
.libs/atomic-asm.o
<br>
<p>/tmp/iccV8CKjn.s(1) : error A2040: Unexpected token: Unary Diez Operator
<br>
at: Start
<br>
<p>/tmp/iccV8CKjn.s(2) : error A2040: Unexpected token: Unary Diez Operator
<br>
at: Start
<br>
<p>/tmp/iccV8CKjn.s(3) : error A2040: Unexpected token: Unary Diez Operator
<br>
at: Start
<br>
<p>/tmp/iccV8CKjn.s(4) : error A2040: Unexpected token: Unary Diez Operator
<br>
at: Start
<br>
<p>.libs/atomic-asm.o - 4 error(s), 0 warning(s)
<br>
<p>make[2]: *** [atomic-asm.lo] Error 1
<br>
<p>make[2]: Leaving directory `/r/work/aiannett/MPI/openmpi-1.3/opal/asm'
<br>
<p>make[1]: *** [all-recursive] Error 1
<br>
<p>make[1]: Leaving directory `/r/work/aiannett/MPI/openmpi-1.3/opal'
<br>
<p>make: *** [all-recursive] Error 1
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>I usually use g77 to build openmpi, but if you send me your configure /
<br>
make
<br>
<p>line I would gladly try on a couple systems if you want additional data
<br>
points.
<br>
<p>I have:
<br>
<p>&nbsp;
<br>
<p>intel 10.1.012 on a RHEL 4.5 and on a RHEL 3.3 Itanium
<br>
<p>intel 10.0.023 on a SuSE 10 Altix ( but I don't use this much )
<br>
<p>&nbsp;
<br>
<p>Joe
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<p><span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
On
<br>
<p><span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<p><span class="quotelev1">&gt; Sent: Monday, January 26, 2009 11:31 AM
</span><br>
<p><span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<p><span class="quotelev1">&gt; Subject: Re: [OMPI users] Cannot compile on Linux Itanium system
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; That's fairly strange; were you able to build Open MPI v1.2.x?
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; I ask because the IA64 assembly hasn't changed between the two at all.
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; On Jan 23, 2009, at 8:33 PM, Iannetti, Anthony C. (GRC-RTB0) wrote:
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev2">&gt; &gt; Dear OpenMPI Users:
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt;    I cannot compile OpenMPI 1.3 on my Itanium 2 system.  Attached is
</span><br>
<p><span class="quotelev2">&gt; &gt; the ompi-output.tar.gz file.  Briefly, my Intel compiler cannot
</span><br>
<p><span class="quotelev2">&gt; &gt; compile the assembler code.
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<p><span class="quotelev2">&gt; &gt; Tony
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; Anthony C. Iannetti, P.E.
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; NASA Glenn Research Center
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; Aeropropulsion Division, Combustion Branch
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; 21000 Brookpark Road, MS 5-10
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; Cleveland, OH 44135
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; phone: (216)433-5586
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; email: Anthony.C.Iannetti_at_[hidden]
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; Please note:  All opinions expressed in this message are my own and
</span><br>
<p><span class="quotelev2">&gt; &gt; NOT of NASA.  Only the NASA Administrator can speak on behalf of
</span><br>
NASA.
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<p><span class="quotelev2">&gt; &gt; &lt;ompi-out.tar.gz&gt;_______________________________________________
</span><br>
<p><span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<p><span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<p><span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; --
</span><br>
<p><span class="quotelev1">&gt; Jeff Squyres
</span><br>
<p><span class="quotelev1">&gt; Cisco Systems
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<p><span class="quotelev1">&gt; users mailing list
</span><br>
<p><span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<p><span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7838/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7839.php">Jeff Squyres: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="7837.php">Don Kerr: "Re: [OMPI users] Heterogeneous OpenFabrics hardware"</a>
<li><strong>In reply to:</strong> <a href="7835.php">Jeff Squyres: "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7848.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
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
