<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 31 23:49:53 2005" -->
<!-- isoreceived="20050901044953" -->
<!-- sent="Thu, 1 Sep 2005 00:49:48 -0400 (EDT)" -->
<!-- isosent="20050901044948" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re:  ltdl.h problem" -->
<!-- id="Pine.LNX.4.58.0509010040590.5104_at_localhost" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050901043709.GC5483_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-31 23:49:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2005/09/0284.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>Previous message:</strong> <a href="0282.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>In reply to:</strong> <a href="0282.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2005/09/0284.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>Reply:</strong> <a href="../../2005/09/0284.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Now I see the reason behind this change. Anyway, few month ago we decide
<br>
to switch the compilation process, and to modify all the files in order to
<br>
start all the #include directives with the full path of the include files
<br>
(starting the main components top directories). Personally, I prefer to
<br>
keep this rule for all things inside, libltdl included. Later, when the
<br>
libtool-2.x will became available we can add a define in the ompi_config.h
<br>
that will trigger the correct include.
<br>
<p>If we provide a ltdl.h file and finally the compilation use the one from
<br>
/usr/include that's really confusing. Look to me like random behaviour
<br>
depending on the willingness of the system administrator (if he/she
<br>
install it or not in the system directories). I think we correct way to do
<br>
it is either to use the one that we provide or to don't provide it if
<br>
there is another alternative.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Thu, 1 Sep 2005, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; * George Bosilca wrote on Thu, Sep 01, 2005 at 06:27:27AM CEST:
</span><br>
<span class="quotelev2">&gt; &gt; I trace this one as far as I could. And the results are mostly unexpected.
</span><br>
<span class="quotelev2">&gt; &gt; On some of the clusters it compiles without any problems and on some
</span><br>
<span class="quotelev2">&gt; &gt; others it doesn't. The difference is ... if there is an ltdl.h installed
</span><br>
<span class="quotelev2">&gt; &gt; in the system directories. I don't think that's the expected behavior for
</span><br>
<span class="quotelev2">&gt; &gt; the compilation, if we have our own ltdl.h file why should we use the
</span><br>
<span class="quotelev2">&gt; &gt; system wide one ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is usually up to the user's choice at some point (I don't know
</span><br>
<span class="quotelev1">&gt; about OpenMPI with that respect).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; For some component it work as expected because on the revision 7106 the
</span><br>
<span class="quotelev2">&gt; &gt; -I$(top_srcdir)/opal/libltdl has been added to the AM_CPPFLAGS in the
</span><br>
<span class="quotelev2">&gt; &gt; Makefile.am. As most of our code use components there is a dependency
</span><br>
<span class="quotelev2">&gt; &gt; between nearly every file in the ompi source code and the ldtl.h file.
</span><br>
<span class="quotelev2">&gt; &gt; Having to modify all the Makefile.am is a herculean task ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, ok, I was blind then, in thinking only the parts that compiled over
</span><br>
<span class="quotelev1">&gt; here used ltdl.h.  There are a couple of ways to add include paths to
</span><br>
<span class="quotelev1">&gt; many Makefile.am's: You could leverage config/Makefile.options, and set
</span><br>
<span class="quotelev1">&gt; a default value for AM_CPPFLAGS (surely you have to change the
</span><br>
<span class="quotelev1">&gt; Makefile.am's once to only add to AM_CPPFLAGS afterwards; or, maybe
</span><br>
<span class="quotelev1">&gt; better, to add some other variable CPPFLAGS_LTDL set in
</span><br>
<span class="quotelev1">&gt; Makefile.options).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But surely, once the work has to be done.  I suggested that change
</span><br>
<span class="quotelev1">&gt; because before, the code would've broken with Libtool-2.x anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
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
<p>&quot;We must accept finite disappointment, but we must never lose infinite
<br>
hope.&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Martin Luther King
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2005/09/0284.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>Previous message:</strong> <a href="0282.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>In reply to:</strong> <a href="0282.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="../../2005/09/0284.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>Reply:</strong> <a href="../../2005/09/0284.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
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
