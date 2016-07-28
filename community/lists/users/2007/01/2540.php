<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 24 19:18:54 2007" -->
<!-- isoreceived="20070125001854" -->
<!-- sent="Wed, 24 Jan 2007 17:18:48 -0700" -->
<!-- isosent="20070125001848" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] coredump in guess_strlen()" -->
<!-- id="C4C0FCDB-1215-4A4D-AA1C-71D4D8F37640_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="098601c7400c$a25c9470$58c31fac_at_bart" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-24 19:18:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2541.php">Jeff Squyres: "Re: [OMPI users] coredump in guess_strlen()"</a>
<li><strong>Previous message:</strong> <a href="2539.php">Reese Faucette: "Re: [OMPI users] coredump in guess_strlen()"</a>
<li><strong>In reply to:</strong> <a href="2539.php">Reese Faucette: "Re: [OMPI users] coredump in guess_strlen()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2541.php">Jeff Squyres: "Re: [OMPI users] coredump in guess_strlen()"</a>
<li><strong>Reply:</strong> <a href="2541.php">Jeff Squyres: "Re: [OMPI users] coredump in guess_strlen()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think this is a reasonable thing to commit.  However, keep in mind  
<br>
that %p isn't totally portable.  I think it should be good on all the  
<br>
platforms GM/MX support, but probably not a great idea to use it in  
<br>
the general codebase.
<br>
<p>But still reasonable to make the code at this level understand it so  
<br>
that you can use %p in components that will only be used on platforms  
<br>
where it's likely supported...
<br>
<p>I actually think the
<br>
<p>So commit away ;)
<br>
<p>Brian
<br>
<p>On Jan 24, 2007, at 4:09 PM, Reese Faucette wrote:
<br>
<p><span class="quotelev1">&gt; [repost - apologies, apparently my first one was unintentionally a
</span><br>
<span class="quotelev1">&gt; followup to another thread]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you ever do an opal_output() with a &quot;%p&quot; in the format string,
</span><br>
<span class="quotelev1">&gt; guess_strlen() can segfault because it neglects to consume the  
</span><br>
<span class="quotelev1">&gt; corresponding
</span><br>
<span class="quotelev1">&gt; argument, causing subsequent &quot;%s&quot; in the same format string to blow  
</span><br>
<span class="quotelev1">&gt; up in
</span><br>
<span class="quotelev1">&gt; strlen() on a bad address.  Any objections to the following patch  
</span><br>
<span class="quotelev1">&gt; to add %p
</span><br>
<span class="quotelev1">&gt; support?  If I were to check this in, is there some automated build  
</span><br>
<span class="quotelev1">&gt; process
</span><br>
<span class="quotelev1">&gt; that will inform me I broke the build on, say, 43-bit Zurix machines ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the llarg = (uintptr_t) business is scary (it is to me a  
</span><br>
<span class="quotelev1">&gt; little), a much
</span><br>
<span class="quotelev1">&gt; more conservative would be:  len += 2*sizeof(void *)+2;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -reese
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: opal/util/printf.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/util/printf.c  (revision 13271)
</span><br>
<span class="quotelev1">&gt; +++ opal/util/printf.c  (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -45,6 +45,7 @@
</span><br>
<span class="quotelev1">&gt;      int iarg;
</span><br>
<span class="quotelev1">&gt;      int len;
</span><br>
<span class="quotelev1">&gt;      long larg;
</span><br>
<span class="quotelev1">&gt; +    long long llarg;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      /* Start off with a fudge factor of 128 to handle the %  
</span><br>
<span class="quotelev1">&gt; escapes that
</span><br>
<span class="quotelev1">&gt;         we aren't calculating here */
</span><br>
<span class="quotelev1">&gt; @@ -90,6 +91,17 @@
</span><br>
<span class="quotelev1">&gt;                  } while (0 != iarg);
</span><br>
<span class="quotelev1">&gt;                  break;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +            case 'p':
</span><br>
<span class="quotelev1">&gt; +                sarg = va_arg(ap, char *);
</span><br>
<span class="quotelev1">&gt; +                llarg = (uintptr_t) sarg;
</span><br>
<span class="quotelev1">&gt; +                len +=2;        /* allow for &quot;0x&quot; */
</span><br>
<span class="quotelev1">&gt; +                /* Now get the log16 */
</span><br>
<span class="quotelev1">&gt; +                do {
</span><br>
<span class="quotelev1">&gt; +                    ++len;
</span><br>
<span class="quotelev1">&gt; +                    llarg /= 16;
</span><br>
<span class="quotelev1">&gt; +                } while (0 != llarg);
</span><br>
<span class="quotelev1">&gt; +                break;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;              case 'f':
</span><br>
<span class="quotelev1">&gt;                  farg = (float)va_arg(ap, int);
</span><br>
<span class="quotelev1">&gt;                  /* Alloc for minus sign */
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
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2541.php">Jeff Squyres: "Re: [OMPI users] coredump in guess_strlen()"</a>
<li><strong>Previous message:</strong> <a href="2539.php">Reese Faucette: "Re: [OMPI users] coredump in guess_strlen()"</a>
<li><strong>In reply to:</strong> <a href="2539.php">Reese Faucette: "Re: [OMPI users] coredump in guess_strlen()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2541.php">Jeff Squyres: "Re: [OMPI users] coredump in guess_strlen()"</a>
<li><strong>Reply:</strong> <a href="2541.php">Jeff Squyres: "Re: [OMPI users] coredump in guess_strlen()"</a>
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
