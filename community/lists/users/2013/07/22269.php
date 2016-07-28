<?
$subject_val = "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  6 17:01:36 2013" -->
<!-- isoreceived="20130706210136" -->
<!-- sent="Sat, 6 Jul 2013 16:01:32 -0500" -->
<!-- isosent="20130706210132" -->
<!-- name="Michael Thomadakis" -->
<!-- email="drmichaelt7777_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2" -->
<!-- id="CA+OO3AXqRFz6Q90AH=_ZVH2qmXq+jmWabdeikQ_+mfvD55_0PA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="234D987D-FC06-438B-87BD-607E1783F950_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2<br>
<strong>From:</strong> Michael Thomadakis (<em>drmichaelt7777_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-06 17:01:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22270.php">Ralph Castain: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22268.php">Michael Thomadakis: "[OMPI users] Question on handling of memory for communications"</a>
<li><strong>In reply to:</strong> <a href="22267.php">Ralph Castain: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22270.php">Ralph Castain: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Reply:</strong> <a href="22270.php">Ralph Castain: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Reply:</strong> <a href="22281.php">Elken, Tom: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks,
<br>
<p>Do you guys have any plan to support Intel Phi in the future? That is,
<br>
running MPI code on the Phi cards or across the multicore and Phi, as Intel
<br>
MPI does?
<br>
<p>thanks...
<br>
Michael
<br>
<p><p>On Sat, Jul 6, 2013 at 2:36 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Rolf will have to answer the question on level of support. The CUDA code
</span><br>
<span class="quotelev1">&gt; is not in the 1.6 series as it was developed after that series went
</span><br>
<span class="quotelev1">&gt; &quot;stable&quot;. It is in the 1.7 series, although the level of support will
</span><br>
<span class="quotelev1">&gt; likely be incrementally increasing as that &quot;feature&quot; series continues to
</span><br>
<span class="quotelev1">&gt; evolve.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 6, 2013, at 12:06 PM, Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello OpenMPI,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am wondering what level of support is there for CUDA and GPUdirect on
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.6.5 and 1.7.2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I saw the ./configure --with-cuda=CUDA_DIR option in the FAQ. However,
</span><br>
<span class="quotelev1">&gt; it seems that with configure v1.6.5 it was ignored.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you identify GPU memory and send messages from it directly without
</span><br>
<span class="quotelev1">&gt; copying to host memory first?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Or in general, what level of CUDA support is there on 1.6.5 and 1.7.2 ?
</span><br>
<span class="quotelev1">&gt; Do you support SDK 5.0 and above?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers ...
</span><br>
<span class="quotelev2">&gt; &gt; Michael
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22269/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22270.php">Ralph Castain: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22268.php">Michael Thomadakis: "[OMPI users] Question on handling of memory for communications"</a>
<li><strong>In reply to:</strong> <a href="22267.php">Ralph Castain: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22270.php">Ralph Castain: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Reply:</strong> <a href="22270.php">Ralph Castain: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Reply:</strong> <a href="22281.php">Elken, Tom: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
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
