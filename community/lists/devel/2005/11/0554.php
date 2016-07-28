<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 28 07:01:17 2005" -->
<!-- isoreceived="20051128120117" -->
<!-- sent="Mon, 28 Nov 2005 12:59:31 +0100" -->
<!-- isosent="20051128115931" -->
<!-- name="Rainer Keller" -->
<!-- email="Keller_at_[hidden]" -->
<!-- subject="Re:  FORTRAN TRUE" -->
<!-- id="200511281259.32148.Keller_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="Pine.WNT.4.63.0511272314460.3552_at_bosilca" -->
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
<strong>From:</strong> Rainer Keller (<em>Keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-28 06:59:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0555.php">Galen M. Shipman: "Re:  MPI_Probe_tag_c mvapi hand"</a>
<li><strong>Previous message:</strong> <a href="0553.php">George Bosilca: "FORTRAN TRUE"</a>
<li><strong>In reply to:</strong> <a href="0553.php">George Bosilca: "FORTRAN TRUE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello George,
<br>
you're right, while g77 accepts the I-format, gfortran coming with gcc-4.0.2 
<br>
does not anymore....
<br>
<p>Thinking about it, it really seems to be the only viable solution (though I 
<br>
don't know Fortran that much), to have a separate print-function in C.... 
<br>
Setting a tmp-integer-variable to the logical would fail e.g. on pgi-compiler 
<br>
(although he swollowed the I5-formatting)...
<br>
<p>Thanks,
<br>
Rainer
<br>
<p>On Monday 28 November 2005 07:26, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; The latest set of changes for the detection of the compiler TRUE value
</span><br>
<span class="quotelev1">&gt; seems to work fine for g77 but not for the newest GNU fortran compiler
</span><br>
<span class="quotelev1">&gt; gfortran. Digging a little bit into the gfortran mailing list, I found a
</span><br>
<span class="quotelev1">&gt; thread about this issue (quite recent only few months old). After debating
</span><br>
<span class="quotelev1">&gt; over the Fortran language and GNU point of view, they decided that the
</span><br>
<span class="quotelev1">&gt; default conversion between INTEGER and LOGICAL is a bad idea (even if it's
</span><br>
<span class="quotelev1">&gt; supported by other compilers). Here is the link to the full discussion on
</span><br>
<span class="quotelev1">&gt; the gfortran ML (<a href="http://gcc.gnu.org/ml/fortran/2005-05/msg00325.html">http://gcc.gnu.org/ml/fortran/2005-05/msg00325.html</a>).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This implicit conversion (LOGICAL to INTEGER) is used on the patch when
</span><br>
<span class="quotelev1">&gt; write use the 'I5' to print out the value of the LOGICAL as an int.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, as far as I remember about my classes of F77 there is no casting
</span><br>
<span class="quotelev1">&gt; operators and no implicit casting is allowed. So the way we detect the
</span><br>
<span class="quotelev1">&gt; value of .TRUE. is not correct even if it's accepted by some compilers. I
</span><br>
<span class="quotelev1">&gt; modify the config/f77_get_value_true.m4 file to (*I hope*) a slightly more
</span><br>
<span class="quotelev1">&gt; F77 friendly version. The patch is attached to the email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm waiting for comments before committing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;We must accept finite disappointment, but we must never lose infinite
</span><br>
<span class="quotelev1">&gt; hope.&quot;
</span><br>
<span class="quotelev1">&gt;                                    Martin Luther King
</span><br>
<p><pre>
-- 
---------------------------------------------------------------------
Dipl.-Inf. Rainer Keller       email: keller_at_[hidden]
  High Performance Computing     Tel: ++49 (0)711-685 5858
    Center Stuttgart (HLRS)        Fax: ++49 (0)711-678 7626
  POSTAL:Nobelstrasse 19             <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
  ACTUAL:Allmandring 30, R. O.030
  70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0555.php">Galen M. Shipman: "Re:  MPI_Probe_tag_c mvapi hand"</a>
<li><strong>Previous message:</strong> <a href="0553.php">George Bosilca: "FORTRAN TRUE"</a>
<li><strong>In reply to:</strong> <a href="0553.php">George Bosilca: "FORTRAN TRUE"</a>
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
