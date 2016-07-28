<?
$subject_val = "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  9 19:29:31 2010" -->
<!-- isoreceived="20100210002931" -->
<!-- sent="Tue, 09 Feb 2010 19:29:25 -0500" -->
<!-- isosent="20100210002925" -->
<!-- name="Iain Bason" -->
<!-- email="Iain.Bason_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale" -->
<!-- id="FA846839-503F-4FA1-8B93-C26AE1C0BAA6_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="991E7292-1DC0-4CF3-A7DF-63F068CBE56E_at_cisco.com" -->
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
<strong>From:</strong> Iain Bason (<em>Iain.Bason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-09 19:29:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12066.php">Terry Dontje: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Previous message:</strong> <a href="12064.php">Jeff Squyres: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>In reply to:</strong> <a href="12064.php">Jeff Squyres: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12066.php">Terry Dontje: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, I am by no means an expert on the GNU-style asm directives.  I  
<br>
believe someone else (George Bosilca?) tweaked what I had suggested.
<br>
<p>That being said, I think the memory &quot;clobber&quot; is harmless.
<br>
<p>Iain
<br>
<p>On Feb 9, 2010, at 5:51 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Iain did the genius for the new assembly.  Iain -- can you respond?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 9, 2010, at 5:44 PM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The old opal_atomic_cmpset_32 worked:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static inline int opal_atomic_cmpset_32( volatile int32_t *addr,
</span><br>
<span class="quotelev2">&gt;&gt;    unsigned char ret;
</span><br>
<span class="quotelev2">&gt;&gt;    __asm__ __volatile__ (
</span><br>
<span class="quotelev2">&gt;&gt;                        SMPLOCK &quot;cmpxchgl %1,%2   \n\t&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                                &quot;sete     %0      \n\t&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                        : &quot;=qm&quot; (ret)
</span><br>
<span class="quotelev2">&gt;&gt;                        : &quot;q&quot;(newval), &quot;m&quot;(*addr), &quot;a&quot;(oldval)
</span><br>
<span class="quotelev2">&gt;&gt;                        : &quot;memory&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    return (int)ret;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The new opal_atomic_cmpset_32 fails:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static inline int opal_atomic_cmpset_32( volatile int32_t *addr,
</span><br>
<span class="quotelev2">&gt;&gt;                                         int32_t oldval, int32_t  
</span><br>
<span class="quotelev2">&gt;&gt; newval)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    unsigned char ret;
</span><br>
<span class="quotelev2">&gt;&gt;    __asm__ __volatile__ (
</span><br>
<span class="quotelev2">&gt;&gt;                        SMPLOCK &quot;cmpxchgl %3,%4   \n\t&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                                &quot;sete     %0      \n\t&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                        : &quot;=qm&quot; (ret), &quot;=a&quot; (oldval), &quot;=m&quot; (*addr)
</span><br>
<span class="quotelev2">&gt;&gt;                        : &quot;q&quot;(newval), &quot;m&quot;(*addr), &quot;1&quot;(oldval)
</span><br>
<span class="quotelev2">&gt;&gt;    return (int)ret;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; **However** if you put back the &quot;clobber&quot; for memory line (3rd :),  
</span><br>
<span class="quotelev2">&gt;&gt; it works:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static inline int opal_atomic_cmpset_32( volatile int32_t *addr,
</span><br>
<span class="quotelev2">&gt;&gt;                                         int32_t oldval, int32_t  
</span><br>
<span class="quotelev2">&gt;&gt; newval)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    unsigned char ret;
</span><br>
<span class="quotelev2">&gt;&gt;    __asm__ __volatile__ (
</span><br>
<span class="quotelev2">&gt;&gt;                        SMPLOCK &quot;cmpxchgl %3,%4   \n\t&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                                &quot;sete     %0      \n\t&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                        : &quot;=qm&quot; (ret), &quot;=a&quot; (oldval), &quot;=m&quot; (*addr)
</span><br>
<span class="quotelev2">&gt;&gt;                        : &quot;q&quot;(newval), &quot;m&quot;(*addr), &quot;1&quot;(oldval)
</span><br>
<span class="quotelev2">&gt;&gt;                        : &quot;memory&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    return (int)ret;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This works in a test case for pathcc, gcc, icc, pgcc, SUN studio cc  
</span><br>
<span class="quotelev2">&gt;&gt; and open64 (pathscale
</span><br>
<span class="quotelev2">&gt;&gt; lineage - which also fails with 1.4.1).
</span><br>
<span class="quotelev2">&gt;&gt; Also the SMPLOCK above is defined as &quot;lock; &quot; - the &quot;;&quot; is a GNU as  
</span><br>
<span class="quotelev2">&gt;&gt; statement delimter - is
</span><br>
<span class="quotelev2">&gt;&gt; that right? Seems to work with/without the &quot;;&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, a question - I see you generate via perl another &quot;lock&quot; asm  
</span><br>
<span class="quotelev2">&gt;&gt; file which you put into
</span><br>
<span class="quotelev2">&gt;&gt; opal/asm/generated/&lt;whatever, e.g. atomic-amd64-linux.s&gt; and stick  
</span><br>
<span class="quotelev2">&gt;&gt; into libasm - what you
</span><br>
<span class="quotelev2">&gt;&gt; generate there for whatever usage hasn't changed 1.4-&gt;1.4.1-&gt;svn  
</span><br>
<span class="quotelev2">&gt;&gt; trunk?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; DM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 9 Feb 2010, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Perhaps someone with a pathscale compiler support contract can  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; investigate this with them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Have them contact us if they want/need help understanding our  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; atomics; we're happy to explain, etc. (the atomics are fairly  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; localized to a small part of OMPI).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 9, 2010, at 11:42 AM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; All,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FWIW, Pathscale is dying in the new atomics in 1.4.1 (and svn  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; trunk) - actually looping -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from gdb:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal_progress_event_users_decrement () at ../.././opal/include/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal/sys/atomic_impl.h:61
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 61         } while (0 == opal_atomic_cmpset_32(addr, oldval,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; oldval - delta));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Current language:  auto; currently asm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) where
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #0  opal_progress_event_users_decrement () at ../.././opal/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; include/opal/sys/atomic_impl.h:61
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #1  0x0000000000000001 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #2  0x00002aec4cf6a5e0 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #3  0x00000000000000eb in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #4  0x00002aec4cfb57e0 in ompi_mpi_init () at ../.././ompi/ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; runtime/ompi_mpi_init.c:818
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #5  0x00007fff5db3bd58 in ?? ()
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Backtrace stopped: previous frame inner to this frame (corrupt  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stack?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb) list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 56      {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 57         int32_t oldval;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 58
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 59         do {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 60            oldval = *addr;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 61         } while (0 == opal_atomic_cmpset_32(addr, oldval,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; oldval - delta));
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 62         return (oldval - delta);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 63      }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 64      #endif  /* OPAL_HAVE_ATOMIC_SUB_32 */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 65
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (gdb)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Tue, 9 Feb 2010, Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FWIW, I have had terrible luck with the patschale compiler over  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the years.  Repeated attempts to get support from them -- even  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when I was a paying customer -- resulted in no help (e.g., a  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; pathCC bug with the OMPI C++ bindings that I filed years ago was  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; never resolved).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is this compiler even supported anymore?  I.e., is there a  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; support department somewhere that you have a hope of getting any  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; help from?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I can't say for sure, of course, but if MPI hello world hangs,  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it smells like a compiler bug.  You might want to attach to  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;hello world&quot; in a debugger and see where it's hung.  You might  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; need to compile OMPI with debugging symbols to get any  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; meaningful information.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ** NOTE: My personal feelings about the pathscale compiler suite  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; do not reflect anyone else's feelings in the Open MPI  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; community.  Perhaps someone could change my mind someday, but  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *I* have personally given up on this compiler.  :-(
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Feb 8, 2010, at 2:38 AM, Rafael Arco Arredondo wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It does work with version 1.4. This is the hello world that  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hangs with
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1.4.1:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  int node, size;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;node);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  printf(&quot;Hello World from Node %d of %d.\n&quot;, node, size);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  return 0;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; El mar, 26-01-2010 a las 03:57 -0500, &#197;ke Sandgren escribi&#243;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1 - Do you have problems with openmpi 1.4 too? (I don't,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; haven't built
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1.4.1 yet)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2 - There is a bug in the pathscale compiler with -fPIC and -g  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; generates incorrect dwarf2 data so debuggers get really  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; confused and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; will have BIG problems debugging the code. I'm chasing them to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; get a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; fix...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 3 - Do you have an example code that have problems?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Rafael Arco Arredondo
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Centro de Servicios de Inform&#225;tica y Redes de Comunicaciones
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Universidad de Granada
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12066.php">Terry Dontje: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>Previous message:</strong> <a href="12064.php">Jeff Squyres: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<li><strong>In reply to:</strong> <a href="12064.php">Jeff Squyres: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12066.php">Terry Dontje: "Re: [OMPI users] Problems building Open MPI 1.4.1 with Pathscale"</a>
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
