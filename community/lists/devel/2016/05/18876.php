<?
$subject_val = "[OMPI devel] [2.0.0rc2] run failure on OpenBSD5-i386";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 17:19:35 2016" -->
<!-- isoreceived="20160502211935" -->
<!-- sent="Mon, 2 May 2016 14:19:29 -0700" -->
<!-- isosent="20160502211929" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [2.0.0rc2] run failure on OpenBSD5-i386" -->
<!-- id="CAAvDA14QaKMOs_8Rt06zd56kYmX6XsBTGvdaziLZR=NKdKYxYA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] [2.0.0rc2] run failure on OpenBSD5-i386<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-02 17:19:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18877.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] Illegal instruction on Pentium III"</a>
<li><strong>Previous message:</strong> <a href="18875.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] openib btl build failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With OpenBSD-5.9 on x86 (but *not* amd64) when I try to run an application
<br>
built with Open MPI 2.0.0rc2, I get a SEGV before any output:
<br>
<p>$ mpirun -mca btl sm,self -np 2 examples
<br>
/ring_c'
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 0 on node openbsd5-i386 exited
<br>
on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>The backtrace from gdb on the core file doesn't contain much info, but
<br>
looks to me like some sort of dl-open related problem.
<br>
<p>(gdb) where
<br>
#0  0x087f3b23 in _dl_find_symbol_obj (object=0x7d388800, name=0xf9ef8ac
<br>
&quot;fileno&quot;, hash=Variable &quot;hash&quot; is not available.
<br>
)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at /usr/src/libexec/ld.so/resolve.c:543
<br>
#1  0x087f3dbf in _dl_find_symbol (name=0xf9ef8ac &quot;fileno&quot;,
<br>
this=0x7bec4f74, flags=Variable &quot;flags&quot; is not available.
<br>
)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at /usr/src/libexec/ld.so/resolve.c:672
<br>
#2  0x087f65cf in _dl_bind (object=0x802a8200, index=4696) at
<br>
/usr/src/libexec/ld.so/i386/rtld_machine.c:387
<br>
#3  0x087f25f7 in _dl_bind_start () at /usr/src/libexec/
<br>
ld.so/i386/ldasm.S:153
<br>
#4  0x802a8200 in ?? ()
<br>
#5  0x00001258 in ?? ()
<br>
#6  0x00000033 in ?? ()
<br>
#7  0x00000033 in ?? ()
<br>
#8  0x00000000 in ?? ()
<br>
<p><p>When I retry I get a similar backtrace, but with different symbols (in
<br>
place of &quot;fileno&quot;) on each try.
<br>
The symbol is always, in the several trials I have made, ones that should
<br>
appear in libc.
<br>
<p>On some trials I see additional output such as:
<br>
<p>[openbsd5-i386:16620] *** Process received signal ***
<br>
[openbsd5-i386:16620] Signal: Segmentation fault (11)
<br>
[openbsd5-i386:16620] Signal code: Address not mapped (1)
<br>
[openbsd5-i386:16620] Failing at address: 0x308023c
<br>
Unable to print stack trace!
<br>
[openbsd5-i386:16620] *** End of error message ***
<br>
<p>And in these cases gdb can't make sense of the core file either.
<br>
<p>I can run a singleton w/o problems, fwiw:
<br>
<p>{openbsd5-i386 examples}$ ./ring_c
<br>
Process 0 sending 10 to 0, tag 201 (1 processes in ring)
<br>
Process 0 sent to 0
<br>
Process 0 decremented value: 9
<br>
Process 0 decremented value: 8
<br>
Process 0 decremented value: 7
<br>
Process 0 decremented value: 6
<br>
Process 0 decremented value: 5
<br>
Process 0 decremented value: 4
<br>
Process 0 decremented value: 3
<br>
Process 0 decremented value: 2
<br>
Process 0 decremented value: 1
<br>
Process 0 decremented value: 0
<br>
Process 0 exiting
<br>
pthread_mutex_destroy on mutex with waiters!
<br>
<p><p>[Somebody might want to look into that pthread_mutex_destroy() warning, but
<br>
I can't see it being relevant to the current problem.]
<br>
<p>I am open to suggestions as to how to debug this issue.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18876/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18877.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] Illegal instruction on Pentium III"</a>
<li><strong>Previous message:</strong> <a href="18875.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] openib btl build failure"</a>
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
