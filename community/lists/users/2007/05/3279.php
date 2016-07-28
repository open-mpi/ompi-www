<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 15 12:55:33 2007" -->
<!-- isoreceived="20070515165533" -->
<!-- sent="Tue, 15 May 2007 12:55:14 -0400" -->
<!-- isosent="20070515165514" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] where did liborte/libopal go?" -->
<!-- id="DD3B3413-DC0B-4C54-8736-383260946EEF_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2453e2900705150932v7e0f1204k2343ac330c80ffc_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-05-15 12:55:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3280.php">Luis Kornblueh: "[OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
<li><strong>Previous message:</strong> <a href="3278.php">Jeff Squyres: "Re: [OMPI users] where did liborte/libopal go?"</a>
<li><strong>In reply to:</strong> <a href="3277.php">Alex Tumanov: "[OMPI users] where did liborte/libopal go?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The main reason for renaming for ORTE and OPAL libraries was to avoid  
<br>
conflicts with others open source libraries (libopal is some kind of  
<br>
communication library available on most of the linux distributions).  
<br>
In same time, our wrapper compilers have been modified to take these  
<br>
changes into account. Usually, from a user perspective (where a user  
<br>
is supposed to use mpicc to compile MPI applications) there should be  
<br>
no difference.
<br>
<p>Right, libopal and liborte have been renamed to libopen-pal  
<br>
respectively libopen-rte. Creating backward compatibility links to  
<br>
the renamed libraries is just a way to ask for troubles. Having 2  
<br>
libopal.so in the system libraries doing completely different things  
<br>
will definitively not help the end users. Moreover, applications  
<br>
compiled with Open MPI 1.1.4 will not work without a recompilation  
<br>
with any ulterior (such as the 1.2) version of Open MPI.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On May 15, 2007, at 12:32 PM, Alex Tumanov wrote:
<br>
<p><span class="quotelev1">&gt; Greetings,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Very quick question: I noticed that liborte and libopal shared
</span><br>
<span class="quotelev1">&gt; libraries are no longer present in the 1.2 version of Open MPI. Can I
</span><br>
<span class="quotelev1">&gt; establish backward compatibility symlinks for applications that were
</span><br>
<span class="quotelev1">&gt; compiled with Open MPI 1.1.4 and were linked with liborte and libopal?
</span><br>
<span class="quotelev1">&gt; If so , which libraries should I link to? Have they been replaced by
</span><br>
<span class="quotelev1">&gt; libopen-rte and libopen-pal respectively? Is it safe to do so?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Alex.
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
<li><strong>Next message:</strong> <a href="3280.php">Luis Kornblueh: "[OMPI users] patch for openmpi 1.2.1 for sun cc on linux"</a>
<li><strong>Previous message:</strong> <a href="3278.php">Jeff Squyres: "Re: [OMPI users] where did liborte/libopal go?"</a>
<li><strong>In reply to:</strong> <a href="3277.php">Alex Tumanov: "[OMPI users] where did liborte/libopal go?"</a>
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
