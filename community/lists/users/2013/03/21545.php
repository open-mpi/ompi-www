<?
$subject_val = "Re: [OMPI users] openmpi java binding errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 15 10:27:47 2013" -->
<!-- isoreceived="20130315142747" -->
<!-- sent="Fri, 15 Mar 2013 07:27:39 -0700" -->
<!-- isosent="20130315142739" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi java binding errors" -->
<!-- id="47EF274C-0081-40E1-BDC9-220043EAF460_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJY_E12A9FCxTuQeXkL0XK6i3vG9hVcTOmeGZHfLSSP2_VdrCw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi java binding errors<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-15 10:27:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21546.php">Huasha Zhao: "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>Previous message:</strong> <a href="21544.php">Gus Correa: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<li><strong>In reply to:</strong> <a href="21538.php">Huasha Zhao: "[OMPI users] openmpi java binding errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21546.php">Huasha Zhao: "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>Reply:</strong> <a href="21546.php">Huasha Zhao: "Re: [OMPI users] openmpi java binding errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It isn't finding libtool's dladvise support - try installing the libtool-ltdl package
<br>
<p>On Mar 13, 2013, at 7:59 PM, Huasha Zhao &lt;creislerzhao_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I encountered an error when running openmpi Java applications (it works fine with c/c++ applications). The java code compiles successfully, but it crashed at runtime with:
</span><br>
<span class="quotelev1">&gt; NO LT_DLADVISE - CANNOT LOAD LIBOMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; JAVA BINDINGS FAILED TO LOAD REQUIRED LIBRARIES
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think it has to do with dynamically loading native libraries. Since I have no experiences with JNI, I would like to resort to the community to help solve the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is how exactly I install openmpi (on a EC2 AMI linux instance). I use a nightly snapshot openmpi-1.9r28157.tar.gz
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sudo ./configure --enable-mpi-java --prefix=/usr/local
</span><br>
<span class="quotelev1">&gt; sudo make all install
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also set LD_LIBRARY_PATH to include &quot;/usr/local/lib&quot; which has &quot;libmpi.so&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Chris Zhao 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21545/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21546.php">Huasha Zhao: "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>Previous message:</strong> <a href="21544.php">Gus Correa: "Re: [OMPI users] Which MPI data types correspond to ptrdiff_t and to size_t in C?"</a>
<li><strong>In reply to:</strong> <a href="21538.php">Huasha Zhao: "[OMPI users] openmpi java binding errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21546.php">Huasha Zhao: "Re: [OMPI users] openmpi java binding errors"</a>
<li><strong>Reply:</strong> <a href="21546.php">Huasha Zhao: "Re: [OMPI users] openmpi java binding errors"</a>
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
