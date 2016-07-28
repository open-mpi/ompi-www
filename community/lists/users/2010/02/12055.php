<?
$subject_val = "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  9 08:49:13 2010" -->
<!-- isoreceived="20100209134913" -->
<!-- sent="Tue, 9 Feb 2010 08:49:07 -0500" -->
<!-- isosent="20100209134907" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale" -->
<!-- id="AEDE7BD0-D62E-4E97-9163-474C2271C4C5_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1265614709.30467.3.camel_at_boabdilmec" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-09 08:49:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12056.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Previous message:</strong> <a href="12054.php">Benjamin Gaudio: "[OMPI users] ompi_info loop"</a>
<li><strong>In reply to:</strong> <a href="12035.php">Rafael Arco Arredondo: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12056.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Reply:</strong> <a href="12056.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Reply:</strong> <a href="12058.php">Mostyn Lewis: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I have had terrible luck with the patschale compiler over the years.  Repeated attempts to get support from them -- even when I was a paying customer -- resulted in no help (e.g., a pathCC bug with the OMPI C++ bindings that I filed years ago was never resolved).
<br>
<p>Is this compiler even supported anymore?  I.e., is there a support department somewhere that you have a hope of getting any help from?
<br>
<p>I can't say for sure, of course, but if MPI hello world hangs, it smells like a compiler bug.  You might want to attach to &quot;hello world&quot; in a debugger and see where it's hung.  You might need to compile OMPI with debugging symbols to get any meaningful information.
<br>
<p>** NOTE: My personal feelings about the pathscale compiler suite do not reflect anyone else's feelings in the Open MPI community.  Perhaps someone could change my mind someday, but *I* have personally given up on this compiler.  :-(
<br>
<p><p>On Feb 8, 2010, at 2:38 AM, Rafael Arco Arredondo wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It does work with version 1.4. This is the hello world that hangs with
</span><br>
<span class="quotelev1">&gt; 1.4.1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int node, size;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;node);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt;   printf(&quot;Hello World from Node %d of %d.\n&quot;, node, size);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; El mar, 26-01-2010 a las 03:57 -0500, &#197;ke Sandgren escribi&#243;:
</span><br>
<span class="quotelev2">&gt; &gt; 1 - Do you have problems with openmpi 1.4 too? (I don't, haven't built
</span><br>
<span class="quotelev2">&gt; &gt; 1.4.1 yet)
</span><br>
<span class="quotelev2">&gt; &gt; 2 - There is a bug in the pathscale compiler with -fPIC and -g that
</span><br>
<span class="quotelev2">&gt; &gt; generates incorrect dwarf2 data so debuggers get really confused and
</span><br>
<span class="quotelev2">&gt; &gt; will have BIG problems debugging the code. I'm chasing them to get a
</span><br>
<span class="quotelev2">&gt; &gt; fix...
</span><br>
<span class="quotelev2">&gt; &gt; 3 - Do you have an example code that have problems?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Rafael Arco Arredondo
</span><br>
<span class="quotelev1">&gt; Centro de Servicios de Inform&#225;tica y Redes de Comunicaciones
</span><br>
<span class="quotelev1">&gt; Universidad de Granada
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12056.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Previous message:</strong> <a href="12054.php">Benjamin Gaudio: "[OMPI users] ompi_info loop"</a>
<li><strong>In reply to:</strong> <a href="12035.php">Rafael Arco Arredondo: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12056.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Reply:</strong> <a href="12056.php">Ake Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Reply:</strong> <a href="12058.php">Mostyn Lewis: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
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
