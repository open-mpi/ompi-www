<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 24 20:23:48 2007" -->
<!-- isoreceived="20070125012348" -->
<!-- sent="Wed, 24 Jan 2007 20:23:38 -0500" -->
<!-- isosent="20070125012338" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] coredump in guess_strlen()" -->
<!-- id="42EE1143-027A-41A4-9515-B1CF97831E2E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C4C0FCDB-1215-4A4D-AA1C-71D4D8F37640_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-01-24 20:23:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2542.php">Jeff Squyres: "Re: [OMPI users] mpicc adds an inexitant directory in the include path."</a>
<li><strong>Previous message:</strong> <a href="2540.php">Brian W. Barrett: "Re: [OMPI users] coredump in guess_strlen()"</a>
<li><strong>In reply to:</strong> <a href="2540.php">Brian W. Barrett: "Re: [OMPI users] coredump in guess_strlen()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Patrick can commit, or as soon as they get us an amendment with  
<br>
Reese's name on schedule A, he can commit directly... ;-)
<br>
<p><p>On Jan 24, 2007, at 7:18 PM, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; I think this is a reasonable thing to commit.  However, keep in mind
</span><br>
<span class="quotelev1">&gt; that %p isn't totally portable.  I think it should be good on all the
</span><br>
<span class="quotelev1">&gt; platforms GM/MX support, but probably not a great idea to use it in
</span><br>
<span class="quotelev1">&gt; the general codebase.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But still reasonable to make the code at this level understand it so
</span><br>
<span class="quotelev1">&gt; that you can use %p in components that will only be used on platforms
</span><br>
<span class="quotelev1">&gt; where it's likely supported...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I actually think the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So commit away ;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 24, 2007, at 4:09 PM, Reese Faucette wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [repost - apologies, apparently my first one was unintentionally a
</span><br>
<span class="quotelev2">&gt;&gt; followup to another thread]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you ever do an opal_output() with a &quot;%p&quot; in the format string,
</span><br>
<span class="quotelev2">&gt;&gt; guess_strlen() can segfault because it neglects to consume the
</span><br>
<span class="quotelev2">&gt;&gt; corresponding
</span><br>
<span class="quotelev2">&gt;&gt; argument, causing subsequent &quot;%s&quot; in the same format string to blow
</span><br>
<span class="quotelev2">&gt;&gt; up in
</span><br>
<span class="quotelev2">&gt;&gt; strlen() on a bad address.  Any objections to the following patch
</span><br>
<span class="quotelev2">&gt;&gt; to add %p
</span><br>
<span class="quotelev2">&gt;&gt; support?  If I were to check this in, is there some automated build
</span><br>
<span class="quotelev2">&gt;&gt; process
</span><br>
<span class="quotelev2">&gt;&gt; that will inform me I broke the build on, say, 43-bit Zurix  
</span><br>
<span class="quotelev2">&gt;&gt; machines ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the llarg = (uintptr_t) business is scary (it is to me a
</span><br>
<span class="quotelev2">&gt;&gt; little), a much
</span><br>
<span class="quotelev2">&gt;&gt; more conservative would be:  len += 2*sizeof(void *)+2;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -reese
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Index: opal/util/printf.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- opal/util/printf.c  (revision 13271)
</span><br>
<span class="quotelev2">&gt;&gt; +++ opal/util/printf.c  (working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -45,6 +45,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;      int iarg;
</span><br>
<span class="quotelev2">&gt;&gt;      int len;
</span><br>
<span class="quotelev2">&gt;&gt;      long larg;
</span><br>
<span class="quotelev2">&gt;&gt; +    long long llarg;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      /* Start off with a fudge factor of 128 to handle the %
</span><br>
<span class="quotelev2">&gt;&gt; escapes that
</span><br>
<span class="quotelev2">&gt;&gt;         we aren't calculating here */
</span><br>
<span class="quotelev2">&gt;&gt; @@ -90,6 +91,17 @@
</span><br>
<span class="quotelev2">&gt;&gt;                  } while (0 != iarg);
</span><br>
<span class="quotelev2">&gt;&gt;                  break;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +            case 'p':
</span><br>
<span class="quotelev2">&gt;&gt; +                sarg = va_arg(ap, char *);
</span><br>
<span class="quotelev2">&gt;&gt; +                llarg = (uintptr_t) sarg;
</span><br>
<span class="quotelev2">&gt;&gt; +                len +=2;        /* allow for &quot;0x&quot; */
</span><br>
<span class="quotelev2">&gt;&gt; +                /* Now get the log16 */
</span><br>
<span class="quotelev2">&gt;&gt; +                do {
</span><br>
<span class="quotelev2">&gt;&gt; +                    ++len;
</span><br>
<span class="quotelev2">&gt;&gt; +                    llarg /= 16;
</span><br>
<span class="quotelev2">&gt;&gt; +                } while (0 != llarg);
</span><br>
<span class="quotelev2">&gt;&gt; +                break;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;              case 'f':
</span><br>
<span class="quotelev2">&gt;&gt;                  farg = (float)va_arg(ap, int);
</span><br>
<span class="quotelev2">&gt;&gt;                  /* Alloc for minus sign */
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI Team, CCS-1
</span><br>
<span class="quotelev1">&gt;    Los Alamos National Laboratory
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2542.php">Jeff Squyres: "Re: [OMPI users] mpicc adds an inexitant directory in the include path."</a>
<li><strong>Previous message:</strong> <a href="2540.php">Brian W. Barrett: "Re: [OMPI users] coredump in guess_strlen()"</a>
<li><strong>In reply to:</strong> <a href="2540.php">Brian W. Barrett: "Re: [OMPI users] coredump in guess_strlen()"</a>
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
