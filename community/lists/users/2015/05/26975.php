<?
$subject_val = "Re: [OMPI users] Openmpi compilation errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 29 08:03:45 2015" -->
<!-- isoreceived="20150529120345" -->
<!-- sent="Fri, 29 May 2015 14:03:41 +0200" -->
<!-- isosent="20150529120341" -->
<!-- name="Luis Kornblueh" -->
<!-- email="luis.kornblueh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi compilation errors" -->
<!-- id="5568559D.50005_at_mpimet.mpg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="404DEA45-73B0-4AD6-847F-74B352A8055D_at_cisco.com" -->
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
<strong>From:</strong> Luis Kornblueh (<em>luis.kornblueh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-29 08:03:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26976.php">Jeff Layton: "[OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="26974.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>In reply to:</strong> <a href="26974.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26980.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26980.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Bruno is using 10.4 as I ready only a second ago in one of his emails. I 
<br>
have no idea if the compiler resource file trick works with this old one.
<br>
<p>By the way it has to be .mypgf90rc not .pgf90rc at least following the 
<br>
current documentation.
<br>
<p>Cheerio,
<br>
Luis
<br>
<p>On 29/05/15 13:07, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On May 29, 2015, at 6:54 AM, Bruno Queiros &lt;bqueiros_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I understand that using Portland compiler isn't &quot;advised&quot; by Open Mpi, i was just wondering if there's a way of doing it, since i need Open Mpi compiled with PG fortran and not gfortran for example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A further clarification: the Portland compiler is a fine compiler; we certainly support it.  The only thing we recommend is avoiding mixing compiler suites whenever possible (e.g., using one compiler for C and another for Fortran).  It leads to complications like this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, it looks like you have a Portland Fortran license, and no corresponding Portland C license, and therefore you're somewhat forced into this situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The name of the binary is correct: pgf90 the name of the file is also correct .pgf90.rc i do have some doubts about the content of the file. Is this enough?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; switch -pthread is replace(-lpthread) positional(linker)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not a Portland customer -- I don't know.  You'll need to check their documentation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If i do a source .pgf90.rc i do get errors:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -bash: ./.pgf90.rc: line 1: syntax error near unexpected token `('
</span><br>
<span class="quotelev2">&gt;&gt; -bash: ./.pgf90.rc: line 1: `switch -pthread is replace(-lpthread) positional(linker)'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm guessing that this file is not intended to be sourced by the shell, but rather noticed and read/used by the pgf90 compiler when it is invoked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sidenote: isn't there a pgfortran compiler executable that is supposed to be preferred over &quot;pgf90&quot; these days?  (remember my disclaimer: I'm not a Portland customer, so I could be totally off base here...)  Have you tried pgfortran to see if it accepts the -pthread option?  Sometimes the different compiler executable entry points behave slightly differently...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Besides that i tried what you mentioned: pgf90 -pthread somefile.f90 , and that gives the expected error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; pgf90 -pthread helloworld.f90
</span><br>
<span class="quotelev2">&gt;&gt; pgf90-Error-Unknown switch: -pthread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds like this file is somehow not yet correct, or you have a version of the Portland compiler that does not use this config file.  You should check the Portland Fortran compiler documentation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you can't get this Portland config file workaround to work, you can also make your own &quot;my_fortran_compiler&quot; script that simply strips out the -pthread argv token and then invokes pgf90 (or pgfortran) with the rest of the argv.  Then you can:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure FC=my_fortran_compiler ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I.e., you're just intercepting Open MPI's invocation of the Fortran compiler, removing the CLI option that pgf90(pgfortran) won't understand, and then invoking pgf90(pgfortran).  Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My real question is, can i change Open Mpi configuration, to not use -pthread flag on fortran compiler?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry, no -- Open MPI requires threading support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26976.php">Jeff Layton: "[OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<li><strong>Previous message:</strong> <a href="26974.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>In reply to:</strong> <a href="26974.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26980.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26980.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
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
