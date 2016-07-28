<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 13 13:03:05 2007" -->
<!-- isoreceived="20070213180305" -->
<!-- sent="Tue, 13 Feb 2007 11:01:58 -0700" -->
<!-- isosent="20070213180158" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] configure --with-tm fails" -->
<!-- id="304269FE-BE05-4451-92A1-8E05B8688DE5_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1171375710.1043.5.camel_at_milliways.bangor.ac.uk" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-13 13:01:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2681.php">David Gunter: "Re: [OMPI users] openmpi with g95 and intel compilers"</a>
<li><strong>Previous message:</strong> <a href="2679.php">Troy Telford: "[OMPI users] Open MPI and PBS Pro 8"</a>
<li><strong>In reply to:</strong> <a href="2674.php">Simeon Walker: "[OMPI users] configure --with-tm fails"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's not exactly friendly that the Debian developer decided to change  
<br>
the include directory for Torque from $prefix/include to $prefix/ 
<br>
include/torque, but I'm not sure it's &quot;wrong&quot;.
<br>
<p>Unfortunately, we don't handle that case properly by default.  A  
<br>
workaround that shouldn't give you any problems would be to specify  
<br>
&quot;CPPFLAGS=-I/usr/include/torque&quot; as an additional flag to Open MPI's  
<br>
configure.  Not ideal, but shouldn't cause any problems for you.
<br>
<p>Hope this helps,
<br>
<p>Brian
<br>
<p><p>On Feb 13, 2007, at 7:08 AM, Simeon Walker wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have torque 2.1.6 installed under /usr from a debian package. I  
</span><br>
<span class="quotelev1">&gt; am trying to configure openmpi 1.1.4 using --wth-tm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The file tm.h is installed under /usr/include/torque. If I use -- 
</span><br>
<span class="quotelev1">&gt; with-tm=/usr then tm.h is not found. The only way I can get this to  
</span><br>
<span class="quotelev1">&gt; work is if I copy tm.h to /usr/include.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a better way to do this? Is the torque debian package  
</span><br>
<span class="quotelev1">&gt; wrong putting tm.h inside /usr/include/torque?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Simeon
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Simeon Walker &lt;simeon_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --  
</span><br>
<span class="quotelev1">&gt; Gall y neges e-bost hon, ac unrhyw atodiadau a anfonwyd gyda hi,  
</span><br>
<span class="quotelev1">&gt; gynnwys deunydd cyfrinachol ac wedi eu bwriadu i'w defnyddio'n unig  
</span><br>
<span class="quotelev1">&gt; gan y sawl y cawsant eu cyfeirio ato (atynt). Os ydych wedi derbyn  
</span><br>
<span class="quotelev1">&gt; y neges e-bost hon trwy gamgymeriad, rhowch wybod i'r anfonwr ar  
</span><br>
<span class="quotelev1">&gt; unwaith a dil&#235;wch y neges. Os na fwriadwyd anfon y neges atoch chi,  
</span><br>
<span class="quotelev1">&gt; rhaid i chi beidio &#226; defnyddio, cadw neu ddatgelu unrhyw wybodaeth  
</span><br>
<span class="quotelev1">&gt; a gynhwysir ynddi. Mae unrhyw farn neu safbwynt yn eiddo i'r sawl  
</span><br>
<span class="quotelev1">&gt; a'i hanfonodd yn unig ac nid yw o anghenraid yn cynrychioli barn  
</span><br>
<span class="quotelev1">&gt; Prifysgol Cymru, Bangor. Nid yw Prifysgol Cymru, Bangor yn gwarantu  
</span><br>
<span class="quotelev1">&gt; bod y neges e-bost hon neu unrhyw atodiadau yn rhydd rhag firysau  
</span><br>
<span class="quotelev1">&gt; neu 100% yn ddiogel. Oni bai fod hyn wedi ei ddatgan yn  
</span><br>
<span class="quotelev1">&gt; uniongyrchol yn nhestun yr e-bost, nid bwriad y neges e-bost hon yw  
</span><br>
<span class="quotelev1">&gt; ffurfio contract rhwymol - mae rhestr o lofnodwyr awdurdodedig ar  
</span><br>
<span class="quotelev1">&gt; gael o Swyddfa Cyllid Prifysgol Cymru, Bangor. www.bangor.ac.uk
</span><br>
<span class="quotelev1">&gt; This email and any attachments may contain confidential material  
</span><br>
<span class="quotelev1">&gt; and is solely for the use of the intended recipient(s). If you have  
</span><br>
<span class="quotelev1">&gt; received this email in error, please notify the sender immediately  
</span><br>
<span class="quotelev1">&gt; and delete this email. If you are not the intended recipient(s),  
</span><br>
<span class="quotelev1">&gt; you must not use, retain or disclose any information contained in  
</span><br>
<span class="quotelev1">&gt; this email. Any views or opinions are solely those of the sender  
</span><br>
<span class="quotelev1">&gt; and do not necessarily represent those of the University of Wales,  
</span><br>
<span class="quotelev1">&gt; Bangor. The University of Wales, Bangor does not guarantee that  
</span><br>
<span class="quotelev1">&gt; this email or any attachments are free from viruses or 100% secure.  
</span><br>
<span class="quotelev1">&gt; Unless expressly stated in the body of the text of the email, this  
</span><br>
<span class="quotelev1">&gt; email is not intended to form a binding contract - a list of  
</span><br>
<span class="quotelev1">&gt; authorised signatories is available from the University of Wales,  
</span><br>
<span class="quotelev1">&gt; Bangor Finance Office. www.bangor.ac.uk
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
<li><strong>Next message:</strong> <a href="2681.php">David Gunter: "Re: [OMPI users] openmpi with g95 and intel compilers"</a>
<li><strong>Previous message:</strong> <a href="2679.php">Troy Telford: "[OMPI users] Open MPI and PBS Pro 8"</a>
<li><strong>In reply to:</strong> <a href="2674.php">Simeon Walker: "[OMPI users] configure --with-tm fails"</a>
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
