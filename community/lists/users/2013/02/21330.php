<?
$subject_val = "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 14:52:49 2013" -->
<!-- isoreceived="20130207195249" -->
<!-- sent="Thu, 07 Feb 2013 14:52:44 -0500" -->
<!-- isosent="20130207195244" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:" -->
<!-- id="5114060C.9070106_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMvdAsKoLK6KsRdci-G20uevSxkd9qwD8icU=xDjWYxMCfn53w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-07 14:52:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21331.php">Jiri Polach: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<li><strong>Previous message:</strong> <a href="21329.php">Syed Ahsan Ali: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<li><strong>In reply to:</strong> <a href="21325.php">Syed Ahsan Ali: "[OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/07/2013 05:55 AM, Syed Ahsan Ali wrote:
<br>
<span class="quotelev1">&gt; I have been running this program successfully before but some copy
</span><br>
<span class="quotelev1">&gt; operation from /usr/ directory has caused this error.
</span><br>
<span class="quotelev1">&gt; The program runs fine on the cores of the same machine.
</span><br>
<span class="quotelev1">&gt; libhdf5.so.7 is also present.
</span><br>
<span class="quotelev1">&gt; [pmdtest_at_pmd HadGEM]$ mpirun -np 32 -hostfile hostlist rca.x
</span><br>
<span class="quotelev1">&gt; rca.x: error while loading shared libraries: libhdf5.so.7: cannot open
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please advise!
</span><br>
<span class="quotelev1">&gt; Ahsan
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
Hi Ahsan
<br>
<p>Did you install hdf5 in your cluster's compute nodes,
<br>
or only on the head node (where presumably you compiled rca.x)?
<br>
<p>You may be able to install hdf5 from yum/rpm packages/apt-get or
<br>
equivalent.
<br>
<p>I hope this helps
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21331.php">Jiri Polach: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<li><strong>Previous message:</strong> <a href="21329.php">Syed Ahsan Ali: "Re: [OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
<li><strong>In reply to:</strong> <a href="21325.php">Syed Ahsan Ali: "[OMPI users] error while loading shared libraries: libhdf5.so.7:"</a>
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
