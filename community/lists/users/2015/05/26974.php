<?
$subject_val = "Re: [OMPI users] Openmpi compilation errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 29 07:07:52 2015" -->
<!-- isoreceived="20150529110752" -->
<!-- sent="Fri, 29 May 2015 11:07:50 +0000" -->
<!-- isosent="20150529110750" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi compilation errors" -->
<!-- id="404DEA45-73B0-4AD6-847F-74B352A8055D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAOnd8MDYCG6Q82iTDC2NGxGRaGs6m8rY8qqj+iB-W+ToRH2C3Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi compilation errors<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-29 07:07:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26975.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26973.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>In reply to:</strong> <a href="26973.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26975.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26975.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26979.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26982.php">Timothy Brown: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 29, 2015, at 6:54 AM, Bruno Queiros &lt;bqueiros_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand that using Portland compiler isn't &quot;advised&quot; by Open Mpi, i was just wondering if there's a way of doing it, since i need Open Mpi compiled with PG fortran and not gfortran for example.
</span><br>
<p>A further clarification: the Portland compiler is a fine compiler; we certainly support it.  The only thing we recommend is avoiding mixing compiler suites whenever possible (e.g., using one compiler for C and another for Fortran).  It leads to complications like this.
<br>
<p>That being said, it looks like you have a Portland Fortran license, and no corresponding Portland C license, and therefore you're somewhat forced into this situation.
<br>
<p><span class="quotelev1">&gt; The name of the binary is correct: pgf90 the name of the file is also correct .pgf90.rc i do have some doubts about the content of the file. Is this enough?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; switch -pthread is replace(-lpthread) positional(linker)
</span><br>
<p>I'm not a Portland customer -- I don't know.  You'll need to check their documentation.
<br>
<p><span class="quotelev1">&gt; If i do a source .pgf90.rc i do get errors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -bash: ./.pgf90.rc: line 1: syntax error near unexpected token `('
</span><br>
<span class="quotelev1">&gt; -bash: ./.pgf90.rc: line 1: `switch -pthread is replace(-lpthread) positional(linker)'
</span><br>
<p>I'm guessing that this file is not intended to be sourced by the shell, but rather noticed and read/used by the pgf90 compiler when it is invoked.
<br>
<p>Sidenote: isn't there a pgfortran compiler executable that is supposed to be preferred over &quot;pgf90&quot; these days?  (remember my disclaimer: I'm not a Portland customer, so I could be totally off base here...)  Have you tried pgfortran to see if it accepts the -pthread option?  Sometimes the different compiler executable entry points behave slightly differently...
<br>
<p><span class="quotelev1">&gt; Besides that i tried what you mentioned: pgf90 -pthread somefile.f90 , and that gives the expected error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pgf90 -pthread helloworld.f90 
</span><br>
<span class="quotelev1">&gt; pgf90-Error-Unknown switch: -pthread
</span><br>
<p>Sounds like this file is somehow not yet correct, or you have a version of the Portland compiler that does not use this config file.  You should check the Portland Fortran compiler documentation.
<br>
<p>If you can't get this Portland config file workaround to work, you can also make your own &quot;my_fortran_compiler&quot; script that simply strips out the -pthread argv token and then invokes pgf90 (or pgfortran) with the rest of the argv.  Then you can:
<br>
<p>./configure FC=my_fortran_compiler ...
<br>
<p>I.e., you're just intercepting Open MPI's invocation of the Fortran compiler, removing the CLI option that pgf90(pgfortran) won't understand, and then invoking pgf90(pgfortran).  Make sense?
<br>
<p><span class="quotelev1">&gt; My real question is, can i change Open Mpi configuration, to not use -pthread flag on fortran compiler?
</span><br>
<p>I'm sorry, no -- Open MPI requires threading support.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26975.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26973.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>In reply to:</strong> <a href="26973.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26975.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26975.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26979.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26982.php">Timothy Brown: "Re: [OMPI users] Openmpi compilation errors"</a>
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
