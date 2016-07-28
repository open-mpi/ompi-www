<?
$subject_val = "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 30 06:44:28 2010" -->
<!-- isoreceived="20101130114428" -->
<!-- sent="Tue, 30 Nov 2010 12:44:19 +0100" -->
<!-- isosent="20101130114419" -->
<!-- name="Pascal Deveze" -->
<!-- email="Pascal.Deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk" -->
<!-- id="4CF4E393.2010900_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7F6AF9CF-96C3-4604-A4E4-4657B27378A8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk<br>
<strong>From:</strong> Pascal Deveze (<em>Pascal.Deveze_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-30 06:44:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8740.php">Joshua Hursey: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>Previous message:</strong> <a href="8738.php">N.M. Maclaren: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>In reply to:</strong> <a href="8724.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8742.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="8742.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thanks for having a look in my unified diff (see comments in the text)
<br>
<p>I have commited all my last changes in bitbucket, including those that 
<br>
follows.
<br>
<p><p>Pascal
<br>
<p>Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Some questions about the patch:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure.in:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -2002,9 +1987,8 @@
</span><br>
<span class="quotelev1">&gt;     # Turn off the building of the Fortran interface and the Info routines
</span><br>
<span class="quotelev1">&gt;     EXTRA_DIRS=&quot;&quot;
</span><br>
<span class="quotelev1">&gt;     AC_DEFINE(HAVE_STATUS_SET_BYTES,1,[Define if status_set_bytes available])
</span><br>
<span class="quotelev1">&gt; -   DEFINE_HAVE_MPI_GREQUEST=&quot;#define HAVE_MPI_GREQUEST&quot;
</span><br>
<span class="quotelev1">&gt; -   # Add the MPICH2_INCLUDE_FLAGS to CPPFLAGS
</span><br>
<span class="quotelev1">&gt; -   CPPFLAGS=&quot;$CPPFLAGS $MPICH2_INCLUDE_FLAGS&quot;
</span><br>
<span class="quotelev1">&gt; +   DEFINE_HAVE_MPI_GREQUEST=&quot;#define HAVE_MPI_GREQUEST 1&quot;
</span><br>
<span class="quotelev1">&gt; +   AC_DEFINE(HAVE_MPIU_FUNCS,1,[Define if MPICH2 memory tracing macros defined])
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;  fi
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;  #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do we have the MPIU functions?  Or is that an MPICH2-specific thing?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I have put in comments this last &quot;AC_DEFINE&quot;:
<br>
# Open MPI does not have the MPIU functions
<br>
# AC_DEFINE(HAVE_MPIU_FUNCS,1,[Define if MPICH2 memory tracing macros 
<br>
defined])
<br>
<p><span class="quotelev1">&gt; I see that you moved confdb/aclocal_cc.m4 to acinclude.m4.  Shoudn't we just -I confdb instead to get all of their .m4 files?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
This has been done during the last porting (years ago).
<br>
I have now changed this: All confdb/.m4 files are now copied from 
<br>
MPICH2. Only the definition of PAC_FUNC_NEEDS_DECL is still kept in 
<br>
acinclude.m4.
<br>
If I do not so, configure is still blocking on this macro.
<br>
All seems working well so. If you have any clue about this, I will take it !
<br>
<p><span class="quotelev1">&gt; In mpipr.h, why remove the #if 0?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -/* Open MPI: these functions are not supposed to be profiled */
</span><br>
<span class="quotelev1">&gt; -#if 0
</span><br>
<span class="quotelev1">&gt;  #undef MPI_Wtick
</span><br>
<span class="quotelev1">&gt;  #define MPI_Wtick PMPI_Wtick
</span><br>
<span class="quotelev1">&gt;  #undef MPI_Wtime
</span><br>
<span class="quotelev1">&gt;  #define MPI_Wtime PMPI_Wtime
</span><br>
<span class="quotelev1">&gt; -#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>OK, I put the #if 0 again.
<br>
<p><span class="quotelev1">&gt; In configure.in, please update the version number in AM_INIT_AUTOMAKE.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>AM_INIT_AUTOMAKE(io-romio, 1.0.0, 'no')
<br>
is changed to
<br>
AM_INIT_AUTOMAKE(io-romio, 1.0.1, 'no')
<br>
<p><span class="quotelev1">&gt; I thought there was one other thing that I saw, but I can't recall it right now...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is just from looking at your diff; I didn't try to run it yet because you said there were some things that weren't pushed back up to bitbucket yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 24, 2010, at 10:48 AM, Pascal Deveze wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the unified diff.
</span><br>
<span class="quotelev2">&gt;&gt; As only the romio subtree is modified, I made the following command:
</span><br>
<span class="quotelev2">&gt;&gt;   diff -u -r -x .svn ompi-trunk/ompi/mca/io/romio/romio/ NEW-ROMIO-FOR-OPENMPI/ompi/mca/io/romio/romio/ &gt; DIFF_UPDATE
</span><br>
<span class="quotelev2">&gt;&gt;   tar cvzf DIFF_UPDATE.TGZ DIFF_UPDATE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Compilation is OK. I run the ROMIO tests.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are a few new modifications that are not in bitbucket. I think it is not necessary to update bitbucket (<a href="http://bitbucket.org/devezep/new-romio-for-openmpi/">http://bitbucket.org/devezep/new-romio-for-openmpi/</a> ).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Pascal
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks Pascal!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there any change you could send a unified diff of the tip of your hg vs. the SVN trunk HEAD?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; E.g., if you have an hg+ssh combo tree, could you &quot;hg up&quot; in there to get all your work, and then &quot;svn diff &gt; diff.out&quot; and then compress and send the diff.out?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 10, 2010, at 8:43 AM, Pascal Deveze wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHAT: Port the lastest ROMIO version from MPICH2-1.3 into the trunk.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHY: There is a considerable interest in updating the ROMIO branch that was ported from mpich2-1.0.7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHERE: ompi/mca/io/romio/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHEN: Before 1.5.2, so asap
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; TIMEOUT: Next Tuesday teleconf, 23 Nov 2010
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am in charge of ticket 1888 (see at 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1888">https://svn.open-mpi.org/trac/ompi/ticket/1888</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have made the porting of ROMIO available in bitbucket since September 17th 2010. (
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://bitbucket.org/devezep/new-romio-for-openmpi/">http://bitbucket.org/devezep/new-romio-for-openmpi/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Until now, I do not have any report on this porting and it's now time to bring it into the trunk.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; All modified files are located under the romio subtree.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Pascal Dev&#232;ze
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; &lt;DIFF_UPDATE.TGZ&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8739/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8740.php">Joshua Hursey: "Re: [OMPI devel] 1.5 plans"</a>
<li><strong>Previous message:</strong> <a href="8738.php">N.M. Maclaren: "Re: [OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>In reply to:</strong> <a href="8724.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version from	MPICH2-1.3 into the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8742.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Reply:</strong> <a href="8742.php">Jeff Squyres: "Re: [OMPI devel] RFC: Bring the lastest ROMIO version	from	MPICH2-1.3 into the trunk"</a>
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
