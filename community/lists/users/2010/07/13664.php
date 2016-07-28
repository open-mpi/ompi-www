<?
$subject_val = "Re: [OMPI users] Open MPI runtime parameter tuning on a custom cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 15 16:48:30 2010" -->
<!-- isoreceived="20100715204830" -->
<!-- sent="Thu, 15 Jul 2010 13:50:52 -0700" -->
<!-- isosent="20100715205052" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI runtime parameter tuning on a custom cluster" -->
<!-- id="4C3F74AC.2000705_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C2DD9BC.20003_at_dps.uibk.ac.at" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI runtime parameter tuning on a custom cluster<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-15 16:50:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13665.php">Douglas Guptill: "Re: [OMPI users] first cluster"</a>
<li><strong>Previous message:</strong> <a href="13663.php">Jed Brown: "Re: [OMPI users] Highly variable performance"</a>
<li><strong>In reply to:</strong> <a href="13464.php">Simone Pellegrini: "[OMPI users] Open MPI runtime parameter tuning on a custom cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Simone Pellegrini wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open MPI community,
</span><br>
<span class="quotelev1">&gt; I would like to know from expert system administrator if they know any 
</span><br>
<span class="quotelev1">&gt; &quot;standardized&quot; way for tuning Open MPI runtime parameters.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to tune the performance on a custom cluster so I would like to 
</span><br>
<span class="quotelev1">&gt; have some hints in order to proceed in the correct direction.
</span><br>
<p>(I'll try to save Jeff a message as he goes through his inbox...)
<br>
<p>I believe there is no standardized way for tuning these parameters.
<br>
<p>On the discouraging side, there are very many parameters and they can be 
<br>
difficult to understand, particularly as there is little to basically no 
<br>
documentation in a number of cases.  In some cases, the trade-offs they 
<br>
make entail issues that require a detailed understanding of your 
<br>
particular configuration and application.
<br>
<p>On the positive node, the default values of many of these parameters 
<br>
have been chosen reasonably and so most of the parameters don't need 
<br>
your attention.  There is on-going, gradual progress in helping users 
<br>
understand tuning -- for example in the OMPI mpirun man page and on the 
<br>
FAQ <a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a> -- see the section on &quot;Tuning&quot;.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13665.php">Douglas Guptill: "Re: [OMPI users] first cluster"</a>
<li><strong>Previous message:</strong> <a href="13663.php">Jed Brown: "Re: [OMPI users] Highly variable performance"</a>
<li><strong>In reply to:</strong> <a href="13464.php">Simone Pellegrini: "[OMPI users] Open MPI runtime parameter tuning on a custom cluster"</a>
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
