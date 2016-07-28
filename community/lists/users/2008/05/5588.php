<?
$subject_val = "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  1 12:03:50 2008" -->
<!-- isoreceived="20080501160350" -->
<!-- sent="Thu, 1 May 2008 08:57:51 -0700" -->
<!-- isosent="20080501155751" -->
<!-- name="Doug Reeder" -->
<!-- email="dlr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard" -->
<!-- id="01761A0D-84A7-4168-AA3A-DB53B9D71883_at_rain.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0E7459B7-AAEC-4CFC-AC5E-D15E0D175E8A_at_rit.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard<br>
<strong>From:</strong> Doug Reeder (<em>dlr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-01 11:57:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5589.php">Ryan Buckley ; 21426: "Re: [OMPI users] users Digest, Vol 885, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="5587.php">Ryan Buckley ; 21426: "[OMPI users] Running Hetergenous MPI Application Over Infiniband"</a>
<li><strong>In reply to:</strong> <a href="5586.php">Linwei Wang: "[OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5590.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Reply:</strong> <a href="5590.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Linwei,
<br>
<p>mpif.h is the include file for fortran programs to use openmpi. The  
<br>
apple version does not support fortran. If you want to use openmpi  
<br>
from fortran you will need to install a version of openmpi that  
<br>
supports fortran, this will install mpif.h. I suggest you install the  
<br>
new version in a different directory than the apple version ( use -- 
<br>
prefix in the openmpi configure command). You will also need to  
<br>
remove the apple version or rename the openmpi include and library  
<br>
files so that the linker can find your new, fortran supporting version.
<br>
<p>Doug Reeder
<br>
On May 1, 2008, at 8:42 AM, Linwei Wang wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I'm new to openmpi. I'm now trying to use BLACS and ScaLAPACK on
</span><br>
<span class="quotelev1">&gt; Leopard.  Since it has built-in Open MPI, I didn't install any other
</span><br>
<span class="quotelev1">&gt; versions. I followed the BLACS install guidances in FAQ section, and
</span><br>
<span class="quotelev1">&gt; it generated errors as:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     &quot;No rule to make target `/usr/include/mpif.h', needed by
</span><br>
<span class="quotelev1">&gt; `mpif.h'.  Stop.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The problem is I could not find &quot;mpif.h&quot; in my computer. Does this
</span><br>
<span class="quotelev1">&gt; mean I should install other Open MPI version rather than using  
</span><br>
<span class="quotelev1">&gt; Leopard's
</span><br>
<span class="quotelev1">&gt; built-in version?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks for the help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Best,
</span><br>
<span class="quotelev1">&gt;   Linwei
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
<li><strong>Next message:</strong> <a href="5589.php">Ryan Buckley ; 21426: "Re: [OMPI users] users Digest, Vol 885, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="5587.php">Ryan Buckley ; 21426: "[OMPI users] Running Hetergenous MPI Application Over Infiniband"</a>
<li><strong>In reply to:</strong> <a href="5586.php">Linwei Wang: "[OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5590.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Reply:</strong> <a href="5590.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
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
