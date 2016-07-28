<?
$subject_val = "Re: [OMPI users] Problem in using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 17:31:35 2010" -->
<!-- isoreceived="20100312223135" -->
<!-- sent="Fri, 12 Mar 2010 16:31:30 -0600" -->
<!-- isosent="20100312223130" -->
<!-- name="vaibhav dutt" -->
<!-- email="vaibhavsupersaiyan9_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in using openmpi" -->
<!-- id="f807a19d1003121431q7ea03a78vdbc4bb526354985a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9108753b1003121305n6e2ce210w3ca3b3b7b55f160d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem in using openmpi<br>
<strong>From:</strong> vaibhav dutt (<em>vaibhavsupersaiyan9_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 17:31:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12341.php">Fabian Hänsel: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>Previous message:</strong> <a href="12339.php">Nick Edmonds: "[OMPI users] openib BTL and MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="12337.php">Fernando Lemos: "Re: [OMPI users] Problem in using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12342.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>Reply:</strong> <a href="12342.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem in using openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I used the export command but it does not seem to work.It's still giving the
<br>
same error as
<br>
the lib64 directory does not exist in the ompi folder.
<br>
<p>Any Suggestions.
<br>
<p>Thank You,
<br>
Vaibhav
<br>
<p><p><p>On Fri, Mar 12, 2010 at 3:05 PM, Fernando Lemos &lt;fernandotcl_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, Mar 12, 2010 at 6:02 PM, Samuel K. Gutierrez &lt;samuel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; One more thing.  The line should have been:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; export LD_LIBRARY_PATH=/home/jess/local/ompi/lib64
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The space in the previous email will make bash unhappy 8-|.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev2">&gt; &gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 12, 2010, at 1:56 PM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It sounds like you may need to set your LD_LIBRARY_PATH environment
</span><br>
<span class="quotelev3">&gt; &gt;&gt; variable correctly.  There are several ways that you can tell the
</span><br>
<span class="quotelev1">&gt; dynamic
</span><br>
<span class="quotelev3">&gt; &gt;&gt; linker where the required libraries are located, but the following may
</span><br>
<span class="quotelev1">&gt; be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sufficient for your needs.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Let's say, for example, that your Open MPI installation is rooted at
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /home/jess/local/ompi and the libraries are located in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /home/jess/local/ompi/lib64, try (bash-like shell):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; export LD_LIBRARY_PATH= /home/jess/local/ompi/lib64
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hope this helps,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mar 12, 2010, at 1:32 PM, vaibhav dutt wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have installed openmpi on an Kubuntu , with Dual core Linux AMD
</span><br>
<span class="quotelev1">&gt; Athlon
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; When trying to compile a simple program, I am getting an error.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpicc: error while loading shared libraries: libopen-pal.so.0: cannot
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; open shared object file: No such file or dir
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I read somewhere that this error is because of some intel compiler
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; being not installed on the proper node, which I don't understand as I
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; am using AMD.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Kindly give your suggestions
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's probably a packaging error, if he used the distribution's
</span><br>
<span class="quotelev1">&gt; packages. In that case, he should report the bug to downstream.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If he installed from source, then it's most likely installed somewhere
</span><br>
<span class="quotelev1">&gt; outside the library path, and the LD_LIBRARY_PATH trick might work (if
</span><br>
<span class="quotelev1">&gt; it doesn't, make sure there are no leftovers, recompile, reinstall and
</span><br>
<span class="quotelev1">&gt; it should work fine).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12340/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12341.php">Fabian Hänsel: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>Previous message:</strong> <a href="12339.php">Nick Edmonds: "[OMPI users] openib BTL and MPI_THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="12337.php">Fernando Lemos: "Re: [OMPI users] Problem in using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12342.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>Reply:</strong> <a href="12342.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem in using openmpi"</a>
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
