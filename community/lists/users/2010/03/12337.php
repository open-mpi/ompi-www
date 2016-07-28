<?
$subject_val = "Re: [OMPI users] Problem in using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 16:05:40 2010" -->
<!-- isoreceived="20100312210540" -->
<!-- sent="Fri, 12 Mar 2010 18:05:35 -0300" -->
<!-- isosent="20100312210535" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in using openmpi" -->
<!-- id="9108753b1003121305n6e2ce210w3ca3b3b7b55f160d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D6AB3C78-DF02-416A-9E07-3A6DB327A2EF_at_lanl.gov" -->
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
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 16:05:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12338.php">Prentice Bisbal: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12336.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>In reply to:</strong> <a href="12336.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem in using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12340.php">vaibhav dutt: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>Reply:</strong> <a href="12340.php">vaibhav dutt: "Re: [OMPI users] Problem in using openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Mar 12, 2010 at 6:02 PM, Samuel K. Gutierrez &lt;samuel_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; One more thing. &#160;The line should have been:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/home/jess/local/ompi/lib64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The space in the previous email will make bash unhappy 8-|.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 12, 2010, at 1:56 PM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It sounds like you may need to set your LD_LIBRARY_PATH environment
</span><br>
<span class="quotelev2">&gt;&gt; variable correctly. &#160;There are several ways that you can tell the dynamic
</span><br>
<span class="quotelev2">&gt;&gt; linker where the required libraries are located, but the following may be
</span><br>
<span class="quotelev2">&gt;&gt; sufficient for your needs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let's say, for example, that your Open MPI installation is rooted at
</span><br>
<span class="quotelev2">&gt;&gt; /home/jess/local/ompi and the libraries are located in
</span><br>
<span class="quotelev2">&gt;&gt; /home/jess/local/ompi/lib64, try (bash-like shell):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH= /home/jess/local/ompi/lib64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 12, 2010, at 1:32 PM, vaibhav dutt wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have installed openmpi on an Kubuntu , with Dual core Linux AMD Athlon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When trying to compile a simple program, I am getting an error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicc: error while loading shared libraries: libopen-pal.so.0: cannot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open shared object file: No such file or dir
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I read somewhere that this error is because of some intel compiler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; being not installed on the proper node, which I don't understand as I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; am using AMD.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kindly give your suggestions
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank You
</span><br>
<p>It's probably a packaging error, if he used the distribution's
<br>
packages. In that case, he should report the bug to downstream.
<br>
<p>If he installed from source, then it's most likely installed somewhere
<br>
outside the library path, and the LD_LIBRARY_PATH trick might work (if
<br>
it doesn't, make sure there are no leftovers, recompile, reinstall and
<br>
it should work fine).
<br>
<p><p>Regards,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12338.php">Prentice Bisbal: "Re: [OMPI users] 3D domain decomposition with MPI"</a>
<li><strong>Previous message:</strong> <a href="12336.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>In reply to:</strong> <a href="12336.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem in using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12340.php">vaibhav dutt: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>Reply:</strong> <a href="12340.php">vaibhav dutt: "Re: [OMPI users] Problem in using openmpi"</a>
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
