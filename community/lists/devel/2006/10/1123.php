<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 18 01:12:30 2006" -->
<!-- isoreceived="20061018051230" -->
<!-- sent="Tue, 17 Oct 2006 23:11:54 -0600" -->
<!-- isosent="20061018051154" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="[OMPI devel] (no subject)" -->
<!-- id="1948B6A2-F9DE-4747-AF50-32E59CF92653_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-18 01:11:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1124.php">Jeff Squyres: "Re: [OMPI devel] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="1122.php">Christian Bell: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r12157"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1124.php">Jeff Squyres: "Re: [OMPI devel] (no subject)"</a>
<li><strong>Reply:</strong> <a href="1124.php">Jeff Squyres: "Re: [OMPI devel] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>I have four changes I'd like to make to the wrapper compilers (well,  
<br>
more the build system).  I figured I'd make them available for public  
<br>
comment before I did any of them, as they would change how things got  
<br>
installed and what the user sees:
<br>
<p>1) Only install opal{cc,c++} and orte{cc,c++} if configured with -- 
<br>
with-devel-headers.  Right now, they are always installed, but there  
<br>
are no header files installed for either project, so there's really  
<br>
not much way for a user to actually compile an OPAL / ORTE application.
<br>
<p>2) Drop support for opalCC and orteCC.  It's a pain to setup all the  
<br>
symlinks (indeed, they are currently done wrong for opalCC) and  
<br>
there's no history like there is for mpiCC.  This isn't a big deal,  
<br>
but would make two Makefiles easier to deal with.  And since about  
<br>
every 3 months, I have to fix the Makefiles after they get borked up  
<br>
a little bit, it makes my life easier.
<br>
<p>3) Change what is currently opalcc.1 (name it something generic,  
<br>
probably opal_wrapper.1) and add some macros that get sed'ed so that  
<br>
the man pages appear to be customized for the given command.  Josh  
<br>
and I had talked about this long ago, but time prevented us from  
<br>
actually doing anything.
<br>
<p>4) Install the wrapper data files even if we compiled with --disable- 
<br>
binaries.  This is for the use case of doing multi-lib builds, where  
<br>
one word size will only have the library built, but we need both set  
<br>
of wrapper data files to piece together to activate the multi-lib  
<br>
support in the wrapper compilers.
<br>
<p>Comments?
<br>
<p><p>Brian
<br>
<p><p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1124.php">Jeff Squyres: "Re: [OMPI devel] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="1122.php">Christian Bell: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r12157"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1124.php">Jeff Squyres: "Re: [OMPI devel] (no subject)"</a>
<li><strong>Reply:</strong> <a href="1124.php">Jeff Squyres: "Re: [OMPI devel] (no subject)"</a>
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
