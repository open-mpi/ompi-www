<?
$subject_val = "Re: [OMPI users] Is there a way to define a dynamic installation path for OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 16 15:20:07 2015" -->
<!-- isoreceived="20150216202007" -->
<!-- sent="Mon, 16 Feb 2015 12:20:03 -0800" -->
<!-- isosent="20150216202003" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Is there a way to define a dynamic installation path for OpenMPI?" -->
<!-- id="887C749F-2517-4FBE-8A29-3069EDBAE44D_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="A3E7D2B0-8C5B-4AF3-8758-FC4FD9C7E9DB_at_oit.gatech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Is there a way to define a dynamic installation path for OpenMPI?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-16 15:20:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26330.php">Mehmet Belgin: "Re: [OMPI users] Is there a way to define a dynamic installation path for OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="26328.php">Mehmet Belgin: "[OMPI users] Is there a way to define a dynamic installation path for OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="26328.php">Mehmet Belgin: "[OMPI users] Is there a way to define a dynamic installation path for OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26330.php">Mehmet Belgin: "Re: [OMPI users] Is there a way to define a dynamic installation path for OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="26330.php">Mehmet Belgin: "Re: [OMPI users] Is there a way to define a dynamic installation path for OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please see the following:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=building#installdirs">http://www.open-mpi.org/faq/?category=building#installdirs</a> &lt;<a href="http://www.open-mpi.org/faq/?category=building#installdirs">http://www.open-mpi.org/faq/?category=building#installdirs</a>&gt;
<br>
<p><p><span class="quotelev1">&gt; On Feb 16, 2015, at 10:38 AM, Mehmet Belgin &lt;mehmet.belgin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am sure the subject line is confusing, so let me try to clarify. We installed openMPI in  &#226;&#128;&#156;usr/local/packages&#226;&#128;&#157; on a node that we use for compilations, but this is actually a network-attached share, which is mounted under a different name on compute nodes. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe the installation path is hardcoded in some of the text/binary files, which is causing warning messages such as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;   knem fail open
</span><br>
<span class="quotelev1">&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev1">&gt;   /usr/local/packages/openmpi/1.8/intel-15.0/share/openmpi/help-mpi-btl-sm.txt: No such file or directory.  Sorry!
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;&#226;&#128;&#148;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to install openMPI in a way that it will run from any location as long as the $PATH and $LD_LIBRARY_PATH include required bits?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot in advance!
</span><br>
<span class="quotelev1">&gt; -Mehmet
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26328.php">http://www.open-mpi.org/community/lists/users/2015/02/26328.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26329/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26330.php">Mehmet Belgin: "Re: [OMPI users] Is there a way to define a dynamic installation path for OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="26328.php">Mehmet Belgin: "[OMPI users] Is there a way to define a dynamic installation path for OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="26328.php">Mehmet Belgin: "[OMPI users] Is there a way to define a dynamic installation path for OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26330.php">Mehmet Belgin: "Re: [OMPI users] Is there a way to define a dynamic installation path for OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="26330.php">Mehmet Belgin: "Re: [OMPI users] Is there a way to define a dynamic installation path for OpenMPI?"</a>
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
