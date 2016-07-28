<?
$subject_val = "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  7 08:57:28 2011" -->
<!-- isoreceived="20110407125728" -->
<!-- sent="Thu, 07 Apr 2011 08:59:29 -0400" -->
<!-- isosent="20110407125929" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers" -->
<!-- id="4D9DB531.8010901_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D9DAFE1.5010703_at_rz.rwth-aachen.de" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-07 08:59:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16185.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Previous message:</strong> <a href="16183.php">Paul Kapinos: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<li><strong>In reply to:</strong> <a href="16183.php">Paul Kapinos: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16191.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/07/2011 08:36 AM, Paul Kapinos wrote:
<br>
<span class="quotelev1">&gt; Hi Terry,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so, the attached ceil.c example file *can* be compiled by &quot;CC&quot; (the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Studio C++ compiler), but *cannot* be compiled using &quot;cc&quot; (the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Studio C compiler).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ CC ceil.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ cc ceil.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you try to link in the math library -lm?  When I did this your 
</span><br>
<span class="quotelev2">&gt;&gt; test program worked for me and that actually is the first test that 
</span><br>
<span class="quotelev2">&gt;&gt; the configure does.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5. Looking into configure.log and searching on `ceil' results: there 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was a check for the availability of `ceil' for the C compiler (see 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config.log.ceil). This check says `ceil' is *available* for the &quot;cc&quot; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Compiler, which is *wrong*, cf. (4).
</span><br>
<span class="quotelev2">&gt;&gt; See above, it actually is right when you link in the math lib.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thankt for the tipp! Yes, if using -lm so the Studio C compiler &quot;cc&quot; 
</span><br>
<span class="quotelev1">&gt; works also fine for ceil.c:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cc ceil.c -lm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, is there an error in the configure stage? Or either the checks 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in config.log.ceil does not rely on the avilability of the `ceil' 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; funcion in the C compiler?
</span><br>
<span class="quotelev2">&gt;&gt; It looks to me like the lbat configure test is not linking in the 
</span><br>
<span class="quotelev2">&gt;&gt; math lib. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, the is no -lm in configure:84213 line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note the cheks for ceil again, config.log.ceil. As far as I unterstood 
</span><br>
<span class="quotelev1">&gt; these logs, the checks for ceil and for the need of -lm deliver wrong 
</span><br>
<span class="quotelev1">&gt; results:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:55000: checking if we need -lm for ceil
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; configure:55104: result: no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:55115: checking for ceil
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; configure:55115: result: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, configure assumes &quot;ceil&quot; is available for  the &quot;cc&quot; compiler 
</span><br>
<span class="quotelev1">&gt; without the need for -lm flag - and this is *wrong*, &quot;cc&quot; need -lm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Interesting.  I've looked at some of my x86, Studio, linux builds of 
<br>
OMPI 1.5 branch and I see the correct configure results for ceil that 
<br>
correctly identify the need for -lm.  Your's definitely does not come up 
<br>
with the right answer.  Are you using the &quot;official&quot; ompi 1.5.3 tarball?
<br>
<span class="quotelev1">&gt; It seem for me to be an configure issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Certainly does.
<br>
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16184/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16184/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16185.php">jody: "Re: [OMPI users] problems with the -xterm option"</a>
<li><strong>Previous message:</strong> <a href="16183.php">Paul Kapinos: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<li><strong>In reply to:</strong> <a href="16183.php">Paul Kapinos: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16191.php">Terry Dontje: "Re: [OMPI users] Configure fail: OpenMPI/1.5.3 with Support for LSF using Sun Studio compilers"</a>
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
