<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 28 08:14:53 2006" -->
<!-- isoreceived="20061128131453" -->
<!-- sent="Tue, 28 Nov 2006 14:14:43 +0100" -->
<!-- isosent="20061128131443" -->
<!-- name="Anglade Pierre-Matthieu" -->
<!-- email="anglade_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;amp;'" -->
<!-- id="c65e87810611280514l6ebecb43v4f707887d074805e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="046D027F-51DA-4B3C-B087-69B423AE47B4_at_cisco.com" -->
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
<strong>From:</strong> Anglade Pierre-Matthieu (<em>anglade_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-28 08:14:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1204.php">Li-Ta Lo: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Previous message:</strong> <a href="1202.php">Jeff Squyres: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<li><strong>In reply to:</strong> <a href="1202.php">Jeff Squyres: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1217.php">Jeff Squyres: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<li><strong>Reply:</strong> <a href="1217.php">Jeff Squyres: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
The patch works. No suprprise. Thanks very much. Yet it seems that my
<br>
unusual machine setup keeps making troubles.
<br>
Now it's ptestsome_f.c which gives the following error:
<br>
&nbsp;gcc -DHAVE_CONFIG_H -I. -I../../../../../ompi/mpi/f77/profile
<br>
-I../../../../opal/include -I../../../../orte/include
<br>
-I../../../../ompi/include -I../../../../ompi/include -DOMPI_PROFILE_LAYER=1
<br>
-DOMPI_COMPILING_F77_WRAPPERS=1 -I../../../../.. -I../../../..
<br>
-I../../../../../opal/include -I../../../../../orte/include
<br>
-I../../../../../ompi/include -O3 -DNDEBUG -fno-strict-aliasing -pthread -MT
<br>
ptestsome_f.lo -MD -MP -MF .deps/ptestsome_f.Tpo -c ptestsome_f.c  -fPIC
<br>
-DPIC -o .libs/ptestsome_f.o
<br>
ptestsome_f.c: In function 'mpi_testsome_f':
<br>
ptestsome_f.c:98: error: invalid lvalue in decrement
<br>
ptestsome_f.c:105: error: invalid lvalue in increment
<br>
make[4]: *** [ptestsome_f.lo] Error 1
<br>
make[4]: Leaving directory `/home/anglade/mpi/openmpi-1.1.2
<br>
/build2/ompi/mpi/f77/profile'
<br>
<p>I guess that you don't need again the different logs (but I can obviously
<br>
send them if required).
<br>
I'll be grateful if you could again send me a patch for this one.
<br>
<p>Best regards,
<br>
<p>PMA
<br>
On 11/28/06, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks for the bug report!
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
<p><p><pre>
-- 
Pierre-Matthieu Anglade
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1203/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1204.php">Li-Ta Lo: "Re: [OMPI devel] OMPI alltoall memory footprint"</a>
<li><strong>Previous message:</strong> <a href="1202.php">Jeff Squyres: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<li><strong>In reply to:</strong> <a href="1202.php">Jeff Squyres: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1217.php">Jeff Squyres: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<li><strong>Reply:</strong> <a href="1217.php">Jeff Squyres: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
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
