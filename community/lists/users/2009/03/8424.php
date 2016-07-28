<?
$subject_val = "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 13 09:18:35 2009" -->
<!-- isoreceived="20090313131835" -->
<!-- sent="Fri, 13 Mar 2009 09:18:22 -0400" -->
<!-- isosent="20090313131822" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h" -->
<!-- id="49BA5D1E.8060508_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49B99641.6020202_at_hpcapplications.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-13 09:18:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8425.php">Ralph Castain: "Re: [OMPI users] MPI jobs ending up in one node"</a>
<li><strong>Previous message:</strong> <a href="8423.php">Prentice Bisbal: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8414.php">Mark Potts: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8423.php">Prentice Bisbal: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mark Potts wrote:
<br>
<span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt;    I don't know PGI's compilers, but is it possible that since &quot;restrict&quot;
</span><br>
<span class="quotelev1">&gt;    was supposedly introduced as a C99 feature that it is not supported
</span><br>
<span class="quotelev1">&gt;    by default by their C compiler?  This would explain the wording of
</span><br>
<span class="quotelev1">&gt;    the error message which indicates interpretation of &quot;restrict&quot; as a
</span><br>
<span class="quotelev1">&gt;    variable name.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Perhaps, like gcc, there is a -std=c99 option for the PGI compiler?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I just searched the user guide that came with 8.0-3. It mentions that
<br>
pgcc supports C99, but doesn't mention any compile-time options for it.
<br>
However, the output of 'pgcc --help | grep -i c99' shows these options:
<br>
<p>-c99                Use the C99 language
<br>
-c9x                == -c99
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8425.php">Ralph Castain: "Re: [OMPI users] MPI jobs ending up in one node"</a>
<li><strong>Previous message:</strong> <a href="8423.php">Prentice Bisbal: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8414.php">Mark Potts: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8423.php">Prentice Bisbal: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
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
