<?
$subject_val = "Re: [OMPI users] Where is the error? (MPI program in fortran)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 17 15:23:14 2014" -->
<!-- isoreceived="20140417192314" -->
<!-- sent="Thu, 17 Apr 2014 15:23:07 -0400" -->
<!-- isosent="20140417192307" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Where is the error? (MPI program in fortran)" -->
<!-- id="53502A1B.6080908_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BLU177-W3419C50DDF240AC0D0EA0790520_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Where is the error? (MPI program in fortran)<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-17 15:23:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24238.php">Tobias Burnus: "[OMPI users] MPI one-sided communication questions"</a>
<li><strong>Previous message:</strong> <a href="24236.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>In reply to:</strong> <a href="24235.php">Oscar Mojica: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Oscar
<br>
<p>As Ralph suggested, the problem is indeed a memory access violation,
<br>
a typical violation of array bounds.
<br>
Not really an MPI or OpenMPI problem to be addressed
<br>
by this mailing list.
<br>
<p>Your ran2 function has a memory violation bug.
<br>
It declares dimension ir(1000),
<br>
but, the algorithm generates indexes j for that array above 1000.
<br>
Here is a sample:
<br>
<p>[1,1]&lt;stdout&gt;: j =           72
<br>
[1,1]&lt;stdout&gt;: j =          686
<br>
[1,1]&lt;stdout&gt;: j =         1353
<br>
<p>By the way, although a comment in the program says so,
<br>
other than the name, ran2 certainly isn't the ran2
<br>
algorithm in Numerical Recipes.
<br>
If you want to use a random number generator from Num. Rec.,
<br>
the books and the algorithms are available online
<br>
(ran2 is on p. 272, ch. 7, Numerical Recipes in Fortran 77 or 90):
<br>
<p><a href="http://www.nr.com/oldverswitcher.html">http://www.nr.com/oldverswitcher.html</a>
<br>
<p>As a general suggestion, you may get fewer bugs in Fortran if you drop
<br>
all implicit variable declarations in the program code
<br>
and replace them by explicit declarations
<br>
(and add &quot;implicit none&quot; to all program units, to play safe).
<br>
Implicit variable declarations are a big source of bugs.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>PS - If you are at UFBA, send my hello to Milton Porsani, please.
<br>
<p>On 04/17/2014 02:01 PM, Oscar Mojica wrote:
<br>
<span class="quotelev1">&gt; Hello guys
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used the command
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ulimit -s unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and got
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; stack size              (kbytes, -s) unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but when I ran the program got the same error. So I used the gdb
</span><br>
<span class="quotelev1">&gt; debugger, I compiled using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif90 -g -o mpivfsa_versao2.f  exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran the program and then I ran gdb with both the executable and the
</span><br>
<span class="quotelev1">&gt; core file name as arguments and got the following
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 0x00002aaaab59b54c in free () from /lib/x86_64-linux-gnu/libc.so.6
</span><br>
<span class="quotelev1">&gt; (gdb) backtrace
</span><br>
<span class="quotelev1">&gt; #0  0x00002aaaab59b54c in free () from /lib/x86_64-linux-gnu/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x0000000000406801 in inv_grav3d_vfsa () at mpivfsa_versao2.f:131
</span><br>
<span class="quotelev1">&gt; #2  0x0000000000406b88 in main (argc=1, argv=0x7fffffffe387) at
</span><br>
<span class="quotelev1">&gt; mpivfsa_versao2.f:9
</span><br>
<span class="quotelev1">&gt; #3  0x00002aaaab53976d in __libc_start_main () from
</span><br>
<span class="quotelev1">&gt; /lib/x86_64-linux-gnu/libc.so.6
</span><br>
<span class="quotelev1">&gt; #4  0x0000000000401399 in _start ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These are the lines
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 9            use mpi
</span><br>
<span class="quotelev1">&gt; 131       deallocate(zv,xrec,yrec,xprm,yprm)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the problem is not memory, the problem is related to MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which could be the error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _Oscar Fabian Mojica Ladino_
</span><br>
<span class="quotelev1">&gt; Geologist M.S. in  Geophysics
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;  &gt; From: o_mojical_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; Date: Wed, 16 Apr 2014 15:17:51 -0300
</span><br>
<span class="quotelev2">&gt;  &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; Subject: Re: [OMPI users] Where is the error? (MPI program in fortran)
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Gus
</span><br>
<span class="quotelev2">&gt;  &gt; It is a single machine and i have installed Ubuntu 12.04 LTS. I left
</span><br>
<span class="quotelev1">&gt; my computer in the college but I will try to follow your advice when I
</span><br>
<span class="quotelev1">&gt; can and tell you about it.
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Thanks
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Enviado desde mi iPad
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; El 16/04/2014, a las 14:17, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; escribi&#243;:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Hi Oscar
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; This is a long shot, but maybe worth trying.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; I am assuming you're using Linux, or some form or Unix, right?
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; You may try to increase the stack size.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; The default in Linux is often too small for large programs.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Sometimes this may cause a segmentation fault, even if the
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; program is correct.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; You can check what you have with:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; ulimit -a (bash)
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; or
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; limit (csh or tcsh)
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Then set it to a larger number or perhaps to unlimited,
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; e.g.:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; ulimit -s unlimited
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; or
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; limit stacksize unlimited
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; You didn't say anything about the computer(s) you are using.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Is this a single machine, a cluster, something else?
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Anyway, resetting the statck size may depend a bit on what you
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; have in /etc/security/limits.conf,
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; and whether it allows you to increase the stack size.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; If it is a single computer that you have root access, you may
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; do it yourself.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; There are other limits worth increasing (number of open files,
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; max locked memory).
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; For instance, this could go in limits.conf:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; * - memlock -1
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; * - stack -1
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; * - nofile 4096
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; See 'man limits.conf' for details.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; If it is a cluster, and this should be set on all nodes,
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; and you may need to ask your system administrator to do it.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; I hope this helps,
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; On 04/16/2014 11:24 AM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; On 04/16/2014 08:30 AM, Oscar Mojica wrote:
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; How would be the command line to compile with the option -g ? What
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; debugger can I use?
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; Replace any optimization flags (-O2, or similar) by -g.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; Check if your compiler has the -traceback flag or similar
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; (man compiler-name).
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; The gdb debugger is normally available on Linux (or you can install it
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; with yum, apt-get, etc). An alternative is ddd, with a GUI (can
</span><br>
<span class="quotelev1">&gt; also be
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; installed from yum, etc).
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt; If you use a commercial compiler you may have a debugger with a GUI.
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; Enviado desde mi iPad
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt;&gt;&gt;&gt; El 15/04/2014, a las 18:20, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt;&gt;&gt;&gt; escribi&#243;:
</span><br>
<span class="quotelev2">&gt;  &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt;&gt;&gt;&gt; Or just compiling with -g or -traceback (depending on the
</span><br>
<span class="quotelev1">&gt; compiler) will
</span><br>
<span class="quotelev2">&gt;  &gt; &gt;&gt;&gt;&gt; give you more information about the point of failure
</span><br>
<span class="quotelev2">&gt;  &gt; &gt;&gt;&gt;&gt; in the error message.
</span><br>
<span class="quotelev2">&gt;  &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; On 04/15/2014 04:25 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; Have you tried using a debugger to look at the resulting core
</span><br>
<span class="quotelev1">&gt; file? It
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; will probably point you right at the problem. Most likely a case of
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; overrunning some array when #temps &gt; 5
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; On Tue, Apr 15, 2014 at 10:46 AM, Oscar Mojica
</span><br>
<span class="quotelev1">&gt; &lt;o_mojical_at_[hidden]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; &lt;mailto:o_mojical_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; Hello everybody
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; I implemented a parallel simulated annealing algorithm in fortran.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; The algorithm is describes as follows
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; 1. The MPI program initially generates P processes that have rank
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; 0,1,...,P-1.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; 2. The MPI program generates a starting point and sends it for all
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; processes set T=T0
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; 3. At the current temperature T, each process begins to execute
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; iterative operations
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; 4. At end of iterations, process with rank 0 is responsible for
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; collecting the solution obatined by
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; 5. Each process at current temperature and broadcast the best
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; solution of them among all participating
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; process
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; 6. Each process cools the temperatue and goes back to step 3, until
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; the maximum number of temperatures
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; is reach
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; I compiled with: mpif90 -o exe mpivfsa_version2.f
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; and run with: mpirun -np 4 ./exe in a single machine
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; So I have 4 processes, 1 iteration per temperature and for example
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; 15 temperatures. When I run the program
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; with just 5 temperatures it works well, but when the number of
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; temperatures is higher than 5 it doesn't write the
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; ouput files and I get the following error message:
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06740] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06741] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06741] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06741] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06741] Failing at address: 0xad6af
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06742] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06740] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06740] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06740] Failing at address: 0xad6af
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06742] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06742] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06742] Failing at address: 0xad6af
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06740] [ 0]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x364a0) [0x7f49ee2224a0]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06740] [ 1]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(cfree+0x1c) [0x7f49ee26f54c]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06740] [ 2] ./exe() [0x406742]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06740] [ 3] ./exe(main+0x34) [0x406ac9]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06740] [ 4]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed)
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [0x7f49ee20d76d]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06742] [ 0]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x364a0) [0x7f6877fdc4a0]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06742] [ 1]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(cfree+0x1c) [0x7f687802954c]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06742] [ 2] ./exe() [0x406742]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06742] [ 3] ./exe(main+0x34) [0x406ac9]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06742] [ 4]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed)
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [0x7f6877fc776d]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06742] [ 5] ./exe() [0x401399]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06742] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06740] [ 5] ./exe() [0x401399]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06740] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06741] [ 0]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(+0x364a0) [0x7fa6c4c6e4a0]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06741] [ 1]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(cfree+0x1c) [0x7fa6c4cbb54c]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06741] [ 2] ./exe() [0x406742]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06741] [ 3] ./exe(main+0x34) [0x406ac9]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06741] [ 4]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; /lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed)
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [0x7fa6c4c5976d]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06741] [ 5] ./exe() [0x401399]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; [oscar-Vostro-3550:06741] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; mpirun noticed that process rank 0 with PID 6917 on node
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; oscar-Vostro-3550 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; 2 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; If there is a segmentation fault in no case it must work .
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; I checked the program and didn't find the error. Why does the
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; program work with five temperatures?
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; Could someone help me to find the error and answer my question
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; please.
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; The program and the necessary files to run it are attached
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; _Oscar Fabian Mojica Ladino_
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; Geologist M.S. in Geophysics
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;  &gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;  &gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;  &gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;  &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;  &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt;
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;  &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;  &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24238.php">Tobias Burnus: "[OMPI users] MPI one-sided communication questions"</a>
<li><strong>Previous message:</strong> <a href="24236.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
<li><strong>In reply to:</strong> <a href="24235.php">Oscar Mojica: "Re: [OMPI users] Where is the error? (MPI program in fortran)"</a>
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
