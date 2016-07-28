<?
$subject_val = "Re: [OMPI users] Problem in using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 18:33:13 2010" -->
<!-- isoreceived="20100312233313" -->
<!-- sent="Fri, 12 Mar 2010 16:33:08 -0700" -->
<!-- isosent="20100312233308" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in using openmpi" -->
<!-- id="25244702-42FF-42B2-8115-F78FDA7F0C66_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f807a19d1003121431q7ea03a78vdbc4bb526354985a_at_mail.gmail.com" -->
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
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 18:33:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12343.php">amjad ali: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>Previous message:</strong> <a href="12341.php">Fabian H&#228;nsel: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>In reply to:</strong> <a href="12340.php">vaibhav dutt: "Re: [OMPI users] Problem in using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12341.php">Fabian H&#228;nsel: "Re: [OMPI users] Problem in using openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>If lib64 isn't there, try lib.  That is,
<br>
<p>export LD_LIBRARY_PATH=/home/jess/local/ompi/lib
<br>
<p>Referencing the example that I provided earlier.
<br>
<p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Mar 12, 2010, at 3:31 PM, vaibhav dutt wrote:
&gt; Hi,
&gt;
&gt; I used the export command but it does not seem to work.It's still  
&gt; giving the same error as
&gt; the lib64 directory does not exist in the ompi folder.
&gt;
&gt; Any Suggestions.
&gt;
&gt; Thank You,
&gt; Vaibhav
&gt;
&gt;
&gt;
&gt; On Fri, Mar 12, 2010 at 3:05 PM, Fernando Lemos  
&gt; &lt;fernandotcl_at_[hidden]&gt; wrote:
&gt; On Fri, Mar 12, 2010 at 6:02 PM, Samuel K. Gutierrez  
&gt; &lt;samuel_at_[hidden]&gt; wrote:
&gt; &gt; One more thing.  The line should have been:
&gt; &gt;
&gt; &gt; export LD_LIBRARY_PATH=/home/jess/local/ompi/lib64
&gt; &gt;
&gt; &gt; The space in the previous email will make bash unhappy 8-|.
&gt; &gt;
&gt; &gt; --
&gt; &gt; Samuel K. Gutierrez
&gt; &gt; Los Alamos National Laboratory
&gt; &gt;
&gt; &gt; On Mar 12, 2010, at 1:56 PM, Samuel K. Gutierrez wrote:
&gt; &gt;
&gt; &gt;&gt; Hi,
&gt; &gt;&gt;
&gt; &gt;&gt; It sounds like you may need to set your LD_LIBRARY_PATH environment
&gt; &gt;&gt; variable correctly.  There are several ways that you can tell the  
&gt; dynamic
&gt; &gt;&gt; linker where the required libraries are located, but the  
&gt; following may be
&gt; &gt;&gt; sufficient for your needs.
&gt; &gt;&gt;
&gt; &gt;&gt; Let's say, for example, that your Open MPI installation is rooted  
&gt; at
&gt; &gt;&gt; /home/jess/local/ompi and the libraries are located in
&gt; &gt;&gt; /home/jess/local/ompi/lib64, try (bash-like shell):
&gt; &gt;&gt;
&gt; &gt;&gt; export LD_LIBRARY_PATH= /home/jess/local/ompi/lib64
&gt; &gt;&gt;
&gt; &gt;&gt; Hope this helps,
&gt; &gt;&gt;
&gt; &gt;&gt; --
&gt; &gt;&gt; Samuel K. Gutierrez
&gt; &gt;&gt; Los Alamos National Laboratory
&gt; &gt;&gt;
&gt; &gt;&gt; On Mar 12, 2010, at 1:32 PM, vaibhav dutt wrote:
&gt; &gt;&gt;
&gt; &gt;&gt;&gt; Hi,
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; I have installed openmpi on an Kubuntu , with Dual core Linux  
&gt; AMD Athlon
&gt; &gt;&gt;&gt; When trying to compile a simple program, I am getting an error.
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; mpicc: error while loading shared libraries: libopen-pal.so.0:  
&gt; cannot
&gt; &gt;&gt;&gt; open shared object file: No such file or dir
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; I read somewhere that this error is because of some intel compiler
&gt; &gt;&gt;&gt; being not installed on the proper node, which I don't understand  
&gt; as I
&gt; &gt;&gt;&gt; am using AMD.
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; Kindly give your suggestions
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; Thank You
&gt;
&gt; It's probably a packaging error, if he used the distribution's
&gt; packages. In that case, he should report the bug to downstream.
&gt;
&gt; If he installed from source, then it's most likely installed somewhere
&gt; outside the library path, and the LD_LIBRARY_PATH trick might work (if
&gt; it doesn't, make sure there are no leftovers, recompile, reinstall and
&gt; it should work fine).
&gt;
&gt;
&gt; Regards,
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12342/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12343.php">amjad ali: "Re: [OMPI users] Open MPI performance on Amazon Cloud"</a>
<li><strong>Previous message:</strong> <a href="12341.php">Fabian H&#228;nsel: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>In reply to:</strong> <a href="12340.php">vaibhav dutt: "Re: [OMPI users] Problem in using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12341.php">Fabian H&#228;nsel: "Re: [OMPI users] Problem in using openmpi"</a>
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
