<?
$subject_val = "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  7 08:36:54 2011" -->
<!-- isoreceived="20110407123654" -->
<!-- sent="Thu, 07 Apr 2011 14:36:49 +0200" -->
<!-- isosent="20110407123649" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers" -->
<!-- id="4D9DAFE1.5010703_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D9D9739.2070301_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-07 08:36:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16184.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<li><strong>Previous message:</strong> <a href="16182.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<li><strong>In reply to:</strong> <a href="16182.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16184.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<li><strong>Reply:</strong> <a href="16184.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<li><strong>Reply:</strong> <a href="16191.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Terry,
<br>
<p><p><span class="quotelev2">&gt;&gt; so, the attached ceil.c example file *can* be compiled by &quot;CC&quot; (the 
</span><br>
<span class="quotelev2">&gt;&gt; Studio C++ compiler), but *cannot* be compiled using &quot;cc&quot; (the Studio 
</span><br>
<span class="quotelev2">&gt;&gt; C compiler).
</span><br>
<span class="quotelev2">&gt;&gt; $ CC ceil.c
</span><br>
<span class="quotelev2">&gt;&gt; $ cc ceil.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Did you try to link in the math library -lm?  When I did this your test 
</span><br>
<span class="quotelev1">&gt; program worked for me and that actually is the first test that the 
</span><br>
<span class="quotelev1">&gt; configure does.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 5. Looking into configure.log and searching on `ceil' results: there 
</span><br>
<span class="quotelev2">&gt;&gt; was a check for the availability of `ceil' for the C compiler (see 
</span><br>
<span class="quotelev2">&gt;&gt; config.log.ceil). This check says `ceil' is *available* for the &quot;cc&quot; 
</span><br>
<span class="quotelev2">&gt;&gt; Compiler, which is *wrong*, cf. (4).
</span><br>
<span class="quotelev1">&gt; See above, it actually is right when you link in the math lib.
</span><br>
<p>Thankt for the tipp! Yes, if using -lm so the Studio C compiler &quot;cc&quot; 
<br>
works also fine for ceil.c:
<br>
<p>$ cc ceil.c -lm
<br>
<p><p><p><span class="quotelev2">&gt;&gt; So, is there an error in the configure stage? Or either the checks in 
</span><br>
<span class="quotelev2">&gt;&gt; config.log.ceil does not rely on the avilability of the `ceil' funcion 
</span><br>
<span class="quotelev2">&gt;&gt; in the C compiler?
</span><br>
<span class="quotelev1">&gt; It looks to me like the lbat configure test is not linking in the math 
</span><br>
<span class="quotelev1">&gt; lib. 
</span><br>
<p>Yes, the is no -lm in configure:84213 line.
<br>
<p>Note the cheks for ceil again, config.log.ceil. As far as I unterstood 
<br>
these logs, the checks for ceil and for the need of -lm deliver wrong 
<br>
results:
<br>
<p><p>configure:55000: checking if we need -lm for ceil
<br>
....
<br>
configure:55104: result: no
<br>
<p>configure:55115: checking for ceil
<br>
....
<br>
configure:55115: result: yes
<br>
<p><p>So, configure assumes &quot;ceil&quot; is available for  the &quot;cc&quot; compiler without 
<br>
the need for -lm flag - and this is *wrong*, &quot;cc&quot; need -lm.
<br>
<p>It seem for me to be an configure issue.
<br>
<p>Greetings
<br>
<p>Paul
<br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16183/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16184.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<li><strong>Previous message:</strong> <a href="16182.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<li><strong>In reply to:</strong> <a href="16182.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16184.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<li><strong>Reply:</strong> <a href="16184.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<li><strong>Reply:</strong> <a href="16191.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
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
