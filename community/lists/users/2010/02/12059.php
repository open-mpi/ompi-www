<?
$subject_val = "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  9 13:42:51 2010" -->
<!-- isoreceived="20100209184251" -->
<!-- sent="Tue, 9 Feb 2010 13:42:40 -0500" -->
<!-- isosent="20100209184240" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale" -->
<!-- id="BDD96D15-81AF-4FD7-815C-37373E995ED9_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="Pine.GSO.4.64.1002090839340.7766_at_aragorn.brc.West.Sun.COM" -->
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
<strong>Date:</strong> 2010-02-09 13:42:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12060.php">흆e Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Previous message:</strong> <a href="12058.php">Mostyn Lewis: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>In reply to:</strong> <a href="12058.php">Mostyn Lewis: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12060.php">흆e Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Reply:</strong> <a href="12060.php">흆e Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Reply:</strong> <a href="12063.php">Mostyn Lewis: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perhaps someone with a pathscale compiler support contract can investigate this with them.
<br>
<p>Have them contact us if they want/need help understanding our atomics; we're happy to explain, etc. (the atomics are fairly localized to a small part of OMPI).
<br>
<p><p><p>On Feb 9, 2010, at 11:42 AM, Mostyn Lewis wrote:
<br>
<p><span class="quotelev1">&gt; All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, Pathscale is dying in the new atomics in 1.4.1 (and svn trunk) - actually looping -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from gdb:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; opal_progress_event_users_decrement () at ../.././opal/include/opal/sys/atomic_impl.h:61
</span><br>
<span class="quotelev1">&gt; 61         } while (0 == opal_atomic_cmpset_32(addr, oldval, oldval - delta));
</span><br>
<span class="quotelev1">&gt; Current language:  auto; currently asm
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  opal_progress_event_users_decrement () at ../.././opal/include/opal/sys/atomic_impl.h:61
</span><br>
<span class="quotelev1">&gt; #1  0x0000000000000001 in ?? ()
</span><br>
<span class="quotelev1">&gt; #2  0x00002aec4cf6a5e0 in ?? ()
</span><br>
<span class="quotelev1">&gt; #3  0x00000000000000eb in ?? ()
</span><br>
<span class="quotelev1">&gt; #4  0x00002aec4cfb57e0 in ompi_mpi_init () at ../.././ompi/runtime/ompi_mpi_init.c:818
</span><br>
<span class="quotelev1">&gt; #5  0x00007fff5db3bd58 in ?? ()
</span><br>
<span class="quotelev1">&gt; Backtrace stopped: previous frame inner to this frame (corrupt stack?)
</span><br>
<span class="quotelev1">&gt; (gdb) list
</span><br>
<span class="quotelev1">&gt; 56      {
</span><br>
<span class="quotelev1">&gt; 57         int32_t oldval;
</span><br>
<span class="quotelev1">&gt; 58
</span><br>
<span class="quotelev1">&gt; 59         do {
</span><br>
<span class="quotelev1">&gt; 60            oldval = *addr;
</span><br>
<span class="quotelev1">&gt; 61         } while (0 == opal_atomic_cmpset_32(addr, oldval, oldval - delta));
</span><br>
<span class="quotelev1">&gt; 62         return (oldval - delta);
</span><br>
<span class="quotelev1">&gt; 63      }
</span><br>
<span class="quotelev1">&gt; 64      #endif  /* OPAL_HAVE_ATOMIC_SUB_32 */
</span><br>
<span class="quotelev1">&gt; 65
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 9 Feb 2010, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; FWIW, I have had terrible luck with the patschale compiler over the years.  Repeated attempts to get support from them -- even when I was a paying customer -- resulted in no help (e.g., a pathCC bug with the OMPI C++ bindings that I filed years ago was never resolved).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is this compiler even supported anymore?  I.e., is there a support department somewhere that you have a hope of getting any help from?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can't say for sure, of course, but if MPI hello world hangs, it smells like a compiler bug.  You might want to attach to &quot;hello world&quot; in a debugger and see where it's hung.  You might need to compile OMPI with debugging symbols to get any meaningful information.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ** NOTE: My personal feelings about the pathscale compiler suite do not reflect anyone else's feelings in the Open MPI community.  Perhaps someone could change my mind someday, but *I* have personally given up on this compiler.  :-(
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 8, 2010, at 2:38 AM, Rafael Arco Arredondo wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It does work with version 1.4. This is the hello world that hangs with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1.4.1:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   int node, size;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;node);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   printf(&quot;Hello World from Node %d of %d.\n&quot;, node, size);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   return 0;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; El mar, 26-01-2010 a las 03:57 -0500, &#197;ke Sandgren escribi&#243;:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1 - Do you have problems with openmpi 1.4 too? (I don't, haven't built
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1.4.1 yet)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2 - There is a bug in the pathscale compiler with -fPIC and -g that
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; generates incorrect dwarf2 data so debuggers get really confused and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; will have BIG problems debugging the code. I'm chasing them to get a
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; fix...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 3 - Do you have an example code that have problems?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Rafael Arco Arredondo
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Centro de Servicios de Inform&#225;tica y Redes de Comunicaciones
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Universidad de Granada
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="12060.php">흆e Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Previous message:</strong> <a href="12058.php">Mostyn Lewis: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>In reply to:</strong> <a href="12058.php">Mostyn Lewis: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12060.php">흆e Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Reply:</strong> <a href="12060.php">흆e Sandgren: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Reply:</strong> <a href="12063.php">Mostyn Lewis: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
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
