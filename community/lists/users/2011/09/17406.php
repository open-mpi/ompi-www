<?
$subject_val = "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 06:52:19 2011" -->
<!-- isoreceived="20110923105219" -->
<!-- sent="Fri, 23 Sep 2011 16:22:15 +0530" -->
<!-- isosent="20110923105215" -->
<!-- name="Uday Kumar Reddy B" -->
<!-- email="udayreddy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi -cc=&amp;lt;compiler name&amp;gt; option" -->
<!-- id="CALA1MBLMcQ-zeX_khj3x7xiTZtSmycEhKYbT_GuB9pkn1hpD-w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E7BA412.8030806_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option<br>
<strong>From:</strong> Uday Kumar Reddy B (<em>udayreddy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-23 06:52:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17407.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Previous message:</strong> <a href="17405.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>In reply to:</strong> <a href="17398.php">Gus Correa: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17409.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17409.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Sep 23, 2011 at 2:39 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 22, 2011, at 4:17 PM, Uday Kumar Reddy B wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, but I can't find anything about -cc in openmpi's mpicc man page. So,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -cc should either not be supported or work as per mpich's mpicc if you are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrapping around it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpicc has no way of knowing that an option is not supposed to work. &#160;It
</span><br>
<span class="quotelev2">&gt;&gt; only knows about a small number of options that it can understand (e.g.,
</span><br>
<span class="quotelev2">&gt;&gt; --showme). &#160;Any other command line tokens are passed through to the
</span><br>
<span class="quotelev2">&gt;&gt; underlying compiler.
</span><br>
<span class="quotelev2">&gt;&gt; More specifically: how is mpicc supposed to know that any given option was
</span><br>
<span class="quotelev2">&gt;&gt; intended for mpicc and not the underlying compiler, particularly the ones
</span><br>
<span class="quotelev2">&gt;&gt; that it doesn't support?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Uday
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to use icc (instead of gcc or whatever is under your OpenMPI),
</span><br>
<span class="quotelev1">&gt; just download the OpenMPI tarball
</span><br>
<span class="quotelev1">&gt; to say /home/uday/install/openmpi, untar it,
</span><br>
<span class="quotelev1">&gt; and build it with icc [and I would guess, with icpc and ifort as well].
</span><br>
<span class="quotelev1">&gt; Configure it with --prefix=/your/favorite/directory (e.g. something under
</span><br>
<span class="quotelev1">&gt; your home directory, and pass the compiler names to it CC=icc,
</span><br>
<span class="quotelev1">&gt; CXX=icpc, F77=ifort, FC=ifort.
</span><br>
<span class="quotelev1">&gt; Use the prefix so as not to mix it
</span><br>
<span class="quotelev1">&gt; with other MPI flavors that may be there.
</span><br>
<span class="quotelev1">&gt; Building takes three steps: 1) configure; 2) make; 3) make install.
</span><br>
<span class="quotelev1">&gt; Then set your PATH and LD_LIBRARY_PATH to point to the bin and lib
</span><br>
<span class="quotelev1">&gt; subdirectories of /your/favorite/directory.
</span><br>
<span class="quotelev1">&gt; In case of doubts, read the README file and the OpenMPI FAQ.
</span><br>
<span class="quotelev1">&gt; You're good to go.
</span><br>
<span class="quotelev1">&gt; That one will have icc under mpicc's hood, which I guess
</span><br>
<span class="quotelev1">&gt; is what you want.
</span><br>
<span class="quotelev1">&gt; It is that simple.
</span><br>
<p>But that's not really the point - to re-install MPI from sources! One
<br>
would like to choose between compilers depending on what's on the
<br>
system, and also switch between them to experiment. And if I'm
<br>
packacging a software that makes use of mpicc for building, I wouldn't
<br>
want to check what kind of mpi a user has and customize cmdline flags;
<br>
so environment variables don't really help - they just add to the
<br>
complexity.  The only portable solution is for all MPIs to support the
<br>
same set of options (in particular, the frequently-used ones).  Is
<br>
there any fundamental difficulty in adding -cc to openmpi's mpicc to
<br>
start with? mpich, mvapich already support it; in addition, it is
<br>
standard to have a (-h/-help flag) to list usage options; again, mpich
<br>
and mvapich list these with -help/-h.
<br>
<p>-----------
<br>
$ mpicc -help
<br>
Usage: mpicc [options] file....
<br>
<p>Available mpicc options:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-echo         - Show exactly what this program is doing.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This option should normally not be used.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-show         - Show the commands that would be used without runnning them.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-compile-info - Show how to compile a program.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-link-info    - Show how to link a program.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-v            - Version info of mpicc and its native compiler -i-dynamic.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-help         - Give this help message.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-mpe=XXX      - Build with MPE option, XXX.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See &quot;mpicc -mpe=help&quot; for more information.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-profile=XXX  - Use profiling configuration file,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/mpi/intel/mvapich2-1.4/etc/XXX.conf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As a special case, libXXX.so or libXXX.la may be used
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if the library is in /usr/mpi/intel/mvapich2-1.4/lib.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-config=XXX   - Use configuration file, mpicc-XXX.conf.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;-cc=xxx       - Reset the native compiler to xxx.
<br>
---------
<br>
<p>-- Uday
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My two cents,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17407.php">Uday Kumar Reddy B: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Previous message:</strong> <a href="17405.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>In reply to:</strong> <a href="17398.php">Gus Correa: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17409.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<li><strong>Reply:</strong> <a href="17409.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
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
