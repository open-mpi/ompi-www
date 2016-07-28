<?
$subject_val = "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 13:09:46 2010" -->
<!-- isoreceived="20100506170946" -->
<!-- sent="Thu, 06 May 2010 10:11:51 -0700" -->
<!-- isosent="20100506171151" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?" -->
<!-- id="4BE2F857.9090007_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4BE2F269.1090508_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 13:11:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12929.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12927.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12926.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12931.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12931.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Hi Eugene
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for answering one of my original questions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, there seems to be a problem with the syntax.
</span><br>
<span class="quotelev1">&gt; Is it really &quot;-mca btl btl_sm_num_fifos=some_number&quot;?
</span><br>
<p>No.  Try &quot;--mca btl_sm_num_fifos 4&quot;.  Or,
<br>
<p>% setenv OMPI_MCA_btl_sm_num_fifos 4
<br>
% ompi_info -a | grep btl_sm_num_fifos     # check that things were set 
<br>
correctly
<br>
% mpirun -n 4 a.out
<br>
<p><span class="quotelev1">&gt; When I grep any component starting with btl_sm I get nothing:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info --all | grep btl_sm
</span><br>
<span class="quotelev1">&gt; (No output)
</span><br>
<p>I'm no guru, but I think the reason has something to do with dynamically 
<br>
loaded somethings.  E.g.,
<br>
<p>% /home/eugene/ompi/bin/ompi_info --all | grep btl_sm_num_fifos
<br>
(no output)
<br>
% setenv OPAL_PREFIX /home/eugene/ompi
<br>
% set path = ( $OPAL_PREFIX/bin $path )
<br>
% ompi_info --all | grep btl_sm_num_fifos
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_sm_num_fifos&quot; (current value: 
<br>
&quot;1&quot;, data source: default value)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12929.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a	Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12927.php">Douglas Guptill: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12926.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12931.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Reply:</strong> <a href="12931.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
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
