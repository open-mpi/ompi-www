<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov 30 11:53:01 2006" -->
<!-- isoreceived="20061130165301" -->
<!-- sent="Thu, 30 Nov 2006 11:52:51 -0500" -->
<!-- isosent="20061130165251" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;amp;'" -->
<!-- id="648D59FC-124C-4D87-8B63-7052926E9DAE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c65e87810611280514l6ebecb43v4f707887d074805e_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-30 11:52:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/12/1218.php">Ralph Castain: "[OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Previous message:</strong> <a href="1216.php">Ralph H Castain: "Re: [OMPI devel] Build system changes"</a>
<li><strong>In reply to:</strong> <a href="1203.php">Anglade Pierre-Matthieu: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying -- this has been a crazy week in  
<br>
trying to catch up from SC06 and the US holiday...
<br>
<p>Ok, I think I've got all the fixes in now; I simulated a full build  
<br>
in your environment and I think I fixed up 2 more typos (including  
<br>
the one you noted).
<br>
<p>Attached is a patch to apply on top of the one you already applied.   
<br>
The fixes are in the OMPI development trunk and will be moved over to  
<br>
the release branches shortly.  They will be included in all future  
<br>
OMPI releases.
<br>
<p>Let me know if this works for you; we have not tested the sizeof 
<br>
(int) != sizeof(INTEGER) code well.  Out of curiosity: is there a  
<br>
reason you're using g95 instead of gfortran?
<br>
<p><p>

<br><p>
<p>On Nov 28, 2006, at 8:14 AM, Anglade Pierre-Matthieu wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; The patch works. No suprprise. Thanks very much. Yet it seems that  
</span><br>
<span class="quotelev1">&gt; my unusual machine setup keeps making troubles.
</span><br>
<span class="quotelev1">&gt; Now it's ptestsome_f.c which gives the following error:
</span><br>
<span class="quotelev1">&gt;  gcc -DHAVE_CONFIG_H -I. -I../../../../../ompi/mpi/f77/profile - 
</span><br>
<span class="quotelev1">&gt; I../../../../opal/include -I../../../../orte/include -I../../../../ 
</span><br>
<span class="quotelev1">&gt; ompi/include -I../../../../ompi/include -DOMPI_PROFILE_LAYER=1 - 
</span><br>
<span class="quotelev1">&gt; DOMPI_COMPILING_F77_WRAPPERS=1 -I../../../../.. -I../../../.. - 
</span><br>
<span class="quotelev1">&gt; I../../../../../opal/include -I../../../../../orte/include - 
</span><br>
<span class="quotelev1">&gt; I../../../../../ompi/include -O3 -DNDEBUG -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -MT ptestsome_f.lo -MD -MP -MF .deps/ptestsome_f.Tpo -c  
</span><br>
<span class="quotelev1">&gt; ptestsome_f.c  -fPIC -DPIC -o .libs/ptestsome_f.o
</span><br>
<span class="quotelev1">&gt; ptestsome_f.c: In function 'mpi_testsome_f':
</span><br>
<span class="quotelev1">&gt; ptestsome_f.c:98: error: invalid lvalue in decrement
</span><br>
<span class="quotelev1">&gt; ptestsome_f.c:105: error: invalid lvalue in increment
</span><br>
<span class="quotelev1">&gt; make[4]: *** [ptestsome_f.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/home/anglade/mpi/openmpi- 1.1.2/build2/ 
</span><br>
<span class="quotelev1">&gt; ompi/mpi/f77/profile'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess that you don't need again the different logs (but I can  
</span><br>
<span class="quotelev1">&gt; obviously send them if required).
</span><br>
<span class="quotelev1">&gt; I'll be grateful if you could again send me a patch for this one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PMA
</span><br>
<span class="quotelev1">&gt; On 11/28/06, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: Many thanks  
</span><br>
<span class="quotelev1">&gt; for the bug report!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These are typos in the code path for where the size of a C integer is
</span><br>
<span class="quotelev1">&gt; not the same as the size for a Fortran INTEGER.  I have fixed the
</span><br>
<span class="quotelev1">&gt; problems on our development head; they will be included in the next
</span><br>
<span class="quotelev1">&gt; release of Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the moment, the attached patch should fix the problem for you.
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
<span class="quotelev1">&gt; On Nov 28, 2006, at 4:23 AM, Anglade Pierre-Matthieu wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Trying to compile open-mpi 1.1.2 I've encounter the error message
</span><br>
<span class="quotelev2">&gt; &gt; used as a title. Please find attached a tar.file cointaining:
</span><br>
<span class="quotelev2">&gt; &gt; -the configure output and log
</span><br>
<span class="quotelev2">&gt; &gt; -the make output
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've try to correct the error and indeed changing line 98-99 in
</span><br>
<span class="quotelev2">&gt; &gt; pfile_read_at_f.c
</span><br>
<span class="quotelev2">&gt; &gt; from
</span><br>
<span class="quotelev2">&gt; &gt; 98   if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;&amp;
</span><br>
<span class="quotelev2">&gt; &gt; 99       MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev2">&gt; &gt; to
</span><br>
<span class="quotelev2">&gt; &gt; 98   if (MPI_SUCCESS == OMPI_FINT_2_INT(*ierr) &amp;&amp;
</span><br>
<span class="quotelev2">&gt; &gt; 99       MPI_STATUS_IGNORE != c_status) {
</span><br>
<span class="quotelev2">&gt; &gt; allow continuing the compilation up to the next file containing
</span><br>
<span class="quotelev2">&gt; &gt; precisely the same 'structure'. So I'm wondering what went wrong
</span><br>
<span class="quotelev2">&gt; &gt; with my build. Can someone help me with that ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Pierre-Matthieu Anglade
</span><br>
<span class="quotelev2">&gt; &gt; &lt;build-problem.tar.bz2&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Pierre-Matthieu Anglade
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1217/f77-2.patch">f77-2.patch</a>
</ul>
<!-- attachment="f77-2.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/12/1218.php">Ralph Castain: "[OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Previous message:</strong> <a href="1216.php">Ralph H Castain: "Re: [OMPI devel] Build system changes"</a>
<li><strong>In reply to:</strong> <a href="1203.php">Anglade Pierre-Matthieu: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
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
