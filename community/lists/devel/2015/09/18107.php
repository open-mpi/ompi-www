<?
$subject_val = "[OMPI devel] new compiler warning with --enable-picky using UH --disable-dlopen jenkins project";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 12:48:41 2015" -->
<!-- isoreceived="20150925164841" -->
<!-- sent="Fri, 25 Sep 2015 10:48:40 -0600" -->
<!-- isosent="20150925164840" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] new compiler warning with --enable-picky using UH --disable-dlopen jenkins project" -->
<!-- id="CAF1Cqj7rgrRdBovfVCsLz-hshXkDNv_8A65aKAV2ZoqzEVFnsw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] new compiler warning with --enable-picky using UH --disable-dlopen jenkins project<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-25 12:48:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18108.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] PR 595 busted build of mpi_f08"</a>
<li><strong>Previous message:</strong> <a href="18106.php">Howard Pritchard: "[OMPI devel] busted build"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI Folks,
<br>
<p>First, the --disable-dlopen/--distcheck projects do not run on anything
<br>
having anything to do with
<br>
Cray.  So if you see failures with the disable-dlopen  or distcheck
<br>
projects and chose
<br>
to ignore them please remember they:
<br>
<p>1) run on a vanilla linux (Open Suse 13.1) x86_64 box
<br>
2) use gnu 4.8.1 and 5.2.0 compilers
<br>
<p>So if these systems/config types are important to the project, and your PR
<br>
doesn't pass
<br>
both of these checks its probably a good idea not to merge in until
<br>
figuring out
<br>
better what's going on.
<br>
<p>So I  am triaging the jenkins build failures.  A minor thing with the
<br>
--disable-dlopen project
<br>
I'm seeing these compiler warnings with --enable-picky:
<br>
<p>&nbsp;CC       request/req_test.lo
<br>
info/info.c: In function 'ompi_info_set_value_enum':
<br>
info/info.c:281:57: warning: passing argument 3 of
<br>
'var_enum-&gt;string_from_value' from incompatible pointer type
<br>
[-Wincompatible-pointer-types]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret = var_enum-&gt;string_from_value (var_enum, value, &amp;string_value);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
info/info.c:281:57: note: expected 'const char **' but argument is of
<br>
type 'char **'
<br>
&nbsp;&nbsp;CC       request/req_wait.lo
<br>
&nbsp;&nbsp;CC       runtime/ompi_mpi_abort.lo
<br>
&nbsp;&nbsp;CC       runtime/ompi_mpi_init.lo
<br>
proc/proc.c: In function 'ompi_proc_world':
<br>
proc/proc.c:487:24: warning: comparison between signed and unsigned
<br>
integer expressions [-Wsign-compare]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0 ; i &lt; count ; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
proc/proc.c:505:18: warning: assignment from incompatible pointer type
<br>
[-Wincompatible-pointer-types]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;procs[i] = ompi_proc_for_name (name);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
proc/proc.c:470:25: warning: unused variable 'my_name' [-Wunused-variable]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_process_name_t my_name;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
proc/proc.c:469:28: warning: unused variable 'mask' [-Wunused-variable]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_rte_cmp_bitmask_t mask;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
proc/proc.c:467:18: warning: unused variable 'proc' [-Wunused-variable]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_proc_t *proc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
&nbsp;&nbsp;CC       runtime/ompi_mpi_finalize.lo
<br>
&nbsp;&nbsp;CC       runtime/ompi_mpi_params.lo
<br>
&nbsp;&nbsp;CC       runtime/ompi_mpi_preconnect.lo
<br>
&nbsp;&nbsp;CC       runtime/ompi_cr.lo
<br>
&nbsp;&nbsp;CC       runtime/ompi_info_support.lo
<br>
runtime/ompi_mpi_init.c:119:2: warning: #ident is a GCC extension
<br>
&nbsp;#ident OMPI_IDENT_STRING
<br>
<p><p><p>I think they are new.
<br>
<p><p>The UH jenkins disable-dlopen is currently failing because the
<br>
gfortran 5.2.0 doesn't like change made in PR 595.  Prior to that PR,
<br>
gfortran 5.2.0 could build the usempi_f08 module.  Now apparently it
<br>
can't.
<br>
<p>I'm like 100% sure this is a regression.
<br>
<p><p>The UH jenkins disable-dlopen tests first building with gcc/gfortran
<br>
4.8.1, then proceeds on to a build with 5.2.0.
<br>
<p><p>Unfortunately there are also now periodic hangs of the runs of hello
<br>
world at startup, but most of the time it seems to run.
<br>
<p><p>Howard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18107/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18108.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] PR 595 busted build of mpi_f08"</a>
<li><strong>Previous message:</strong> <a href="18106.php">Howard Pritchard: "[OMPI devel] busted build"</a>
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
