<?
$subject_val = "Re: [OMPI users] OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 26 06:15:04 2014" -->
<!-- isoreceived="20141026101504" -->
<!-- sent="Sun, 26 Oct 2014 11:14:33 +0100 (CET)" -->
<!-- isosent="20141026101433" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris" -->
<!-- id="201410261014.s9QAEXdS018886_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-26 06:14:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25585.php">Siegmar Gross: "Re: [OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25583.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Maybe in reply to:</strong> <a href="25583.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25590.php">Kawashima, Takahiro: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Reply:</strong> <a href="25590.php">Kawashima, Takahiro: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>thank you very much for the quick tutorial. Unfortunately I still
<br>
can't get a backtrace.
<br>
<p><span class="quotelev1">&gt; You might need to configure with --enable-debug and add -g -O0
</span><br>
<span class="quotelev1">&gt; to your CFLAGS and LDFLAGS
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then once you attach with gdb, you have to find the thread that is polling :
</span><br>
<span class="quotelev1">&gt; thread 1
</span><br>
<span class="quotelev1">&gt; bt
</span><br>
<span class="quotelev1">&gt; thread 2
</span><br>
<span class="quotelev1">&gt; bt
</span><br>
<span class="quotelev1">&gt; and so on until you find the good thread
</span><br>
<span class="quotelev1">&gt; If _dbg is a local variable, you need to select the right frame
</span><br>
<span class="quotelev1">&gt; before you can change the value :
</span><br>
<span class="quotelev1">&gt; get the frame number from bt (generally 1 under linux)
</span><br>
<span class="quotelev1">&gt; f &lt;frame number&gt;
</span><br>
<span class="quotelev1">&gt; set _dbg=0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps
</span><br>
<p>&quot;--enable-debug&quot; is one of my default options. Now I used the
<br>
following command to configure Open MPI. I always start the
<br>
build process in an empty directory and I always remove
<br>
/usr/local/openmpi-1.9.0_64_gcc, before I install a new version.
<br>
<p>tyr openmpi-dev-124-g91e9686-SunOS.sparc.64_gcc 112 head config.log \
<br>
&nbsp;&nbsp;| grep openmpi
<br>
$ ../openmpi-dev-124-g91e9686/configure
<br>
&nbsp;&nbsp;--prefix=/usr/local/openmpi-1.9.0_64_gcc
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.9.0_64_gcc/lib64
<br>
&nbsp;&nbsp;--with-jdk-bindir=/usr/local/jdk1.8.0/bin
<br>
&nbsp;&nbsp;--with-jdk-headers=/usr/local/jdk1.8.0/include
<br>
&nbsp;&nbsp;JAVA_HOME=/usr/local/jdk1.8.0
<br>
&nbsp;&nbsp;LDFLAGS=-m64 -g -O0 CC=gcc CXX=g++ FC=gfortran
<br>
&nbsp;&nbsp;CFLAGS=-m64 -D_REENTRANT -g -O0
<br>
&nbsp;&nbsp;CXXFLAGS=-m64 FCFLAGS=-m64 CPP=cpp CXXCPP=cpp
<br>
&nbsp;&nbsp;CPPFLAGS=-D_REENTRANT CXXCPPFLAGS=
<br>
&nbsp;&nbsp;--enable-mpi-cxx --enable-cxx-exceptions --enable-mpi-java
<br>
&nbsp;&nbsp;--enable-heterogeneous --enable-mpi-thread-multiple
<br>
&nbsp;&nbsp;--with-threads=posix --with-hwloc=internal --without-verbs
<br>
&nbsp;&nbsp;--with-wrapper-cflags=-std=c11 -m64 --enable-debug
<br>
tyr openmpi-dev-124-g91e9686-SunOS.sparc.64_gcc 113 
<br>
<p><p>&quot;gbd&quot; doesn't allow any backtrace for any thread.
<br>
<p>tyr java 124 /usr/local/gdb-7.6.1_64_gcc/bin/gdb
<br>
GNU gdb (GDB) 7.6.1
<br>
...
<br>
(gdb) attach 18876
<br>
Attaching to process 18876
<br>
[New process 18876]
<br>
Retry #1:
<br>
Retry #2:
<br>
Retry #3:
<br>
Retry #4:
<br>
0x7eadcb04 in ?? ()
<br>
(gdb) info threads
<br>
[New LWP 12]
<br>
[New LWP 11]
<br>
[New LWP 10]
<br>
[New LWP 9]
<br>
[New LWP 8]
<br>
[New LWP 7]
<br>
[New LWP 6]
<br>
[New LWP 5]
<br>
[New LWP 4]
<br>
[New LWP 3]
<br>
[New LWP 2]
<br>
&nbsp;&nbsp;Id   Target Id         Frame 
<br>
&nbsp;&nbsp;12   LWP 2             0x7eadc6b0 in ?? ()
<br>
&nbsp;&nbsp;11   LWP 3             0x7eadcbb8 in ?? ()
<br>
&nbsp;&nbsp;10   LWP 4             0x7eadcbb8 in ?? ()
<br>
&nbsp;&nbsp;9    LWP 5             0x7eadcbb8 in ?? ()
<br>
&nbsp;&nbsp;8    LWP 6             0x7eadcbb8 in ?? ()
<br>
&nbsp;&nbsp;7    LWP 7             0x7eadcbb8 in ?? ()
<br>
&nbsp;&nbsp;6    LWP 8             0x7ead8b0c in ?? ()
<br>
&nbsp;&nbsp;5    LWP 9             0x7eadcbb8 in ?? ()
<br>
&nbsp;&nbsp;4    LWP 10            0x7eadcbb8 in ?? ()
<br>
&nbsp;&nbsp;3    LWP 11            0x7eadcbb8 in ?? ()
<br>
&nbsp;&nbsp;2    LWP 12            0x7eadcbb8 in ?? ()
<br>
* 1    LWP 1             0x7eadcb04 in ?? ()
<br>
(gdb) thread 1
<br>
[Switching to thread 1 (LWP 1)]
<br>
#0  0x7eadcb04 in ?? ()
<br>
(gdb) bt
<br>
#0  0x7eadcb04 in ?? ()
<br>
#1  0x7eaca12c in ?? ()
<br>
Backtrace stopped: previous frame identical to this frame (corrupt stack?)
<br>
(gdb) thread 2
<br>
[Switching to thread 2 (LWP 12)]
<br>
#0  0x7eadcbb8 in ?? ()
<br>
(gdb) bt
<br>
#0  0x7eadcbb8 in ?? ()
<br>
#1  0x7eac2638 in ?? ()
<br>
Backtrace stopped: previous frame identical to this frame (corrupt stack?)
<br>
(gdb) thread 3
<br>
[Switching to thread 3 (LWP 11)]
<br>
#0  0x7eadcbb8 in ?? ()
<br>
(gdb) bt
<br>
#0  0x7eadcbb8 in ?? ()
<br>
#1  0x7eac25a8 in ?? ()
<br>
Backtrace stopped: previous frame identical to this frame (corrupt stack?)
<br>
(gdb) thread 4
<br>
[Switching to thread 4 (LWP 10)]
<br>
#0  0x7eadcbb8 in ?? ()
<br>
(gdb) bt
<br>
#0  0x7eadcbb8 in ?? ()
<br>
#1  0x7eac2638 in ?? ()
<br>
Backtrace stopped: previous frame identical to this frame (corrupt stack?)
<br>
(gdb) thread 5
<br>
[Switching to thread 5 (LWP 9)]
<br>
#0  0x7eadcbb8 in ?? ()
<br>
(gdb) bt
<br>
#0  0x7eadcbb8 in ?? ()
<br>
#1  0x7eac2638 in ?? ()
<br>
Backtrace stopped: previous frame identical to this frame (corrupt stack?)
<br>
(gdb) thread 6
<br>
[Switching to thread 6 (LWP 8)]
<br>
#0  0x7ead8b0c in ?? ()
<br>
(gdb) bt
<br>
#0  0x7ead8b0c in ?? ()
<br>
#1  0x7eacbcb0 in ?? ()
<br>
Backtrace stopped: previous frame identical to this frame (corrupt stack?)
<br>
(gdb) thread 7
<br>
[Switching to thread 7 (LWP 7)]
<br>
#0  0x7eadcbb8 in ?? ()
<br>
(gdb) bt
<br>
#0  0x7eadcbb8 in ?? ()
<br>
#1  0x7eac25a8 in ?? ()
<br>
Backtrace stopped: previous frame identical to this frame (corrupt stack?)
<br>
(gdb) thread 8
<br>
[Switching to thread 8 (LWP 6)]
<br>
#0  0x7eadcbb8 in ?? ()
<br>
(gdb) bt
<br>
#0  0x7eadcbb8 in ?? ()
<br>
#1  0x7eac25a8 in ?? ()
<br>
Backtrace stopped: previous frame identical to this frame (corrupt stack?)
<br>
(gdb) thread 9
<br>
[Switching to thread 9 (LWP 5)]
<br>
#0  0x7eadcbb8 in ?? ()
<br>
(gdb) bt
<br>
#0  0x7eadcbb8 in ?? ()
<br>
#1  0x7eac2638 in ?? ()
<br>
Backtrace stopped: previous frame identical to this frame (corrupt stack?)
<br>
(gdb) thread 10
<br>
[Switching to thread 10 (LWP 4)]
<br>
#0  0x7eadcbb8 in ?? ()
<br>
(gdb) bt
<br>
#0  0x7eadcbb8 in ?? ()
<br>
#1  0x7eac25a8 in ?? ()
<br>
Backtrace stopped: previous frame identical to this frame (corrupt stack?)
<br>
(gdb) thread 11
<br>
[Switching to thread 11 (LWP 3)]
<br>
#0  0x7eadcbb8 in ?? ()
<br>
(gdb) bt
<br>
#0  0x7eadcbb8 in ?? ()
<br>
#1  0x7eac25a8 in ?? ()
<br>
Backtrace stopped: previous frame identical to this frame (corrupt stack?)
<br>
(gdb) thread 12
<br>
[Switching to thread 12 (LWP 2)]
<br>
#0  0x7eadc6b0 in ?? ()
<br>
(gdb) 
<br>
<p><p><p>I also tried to set _dbg in all available frames without success.
<br>
<p>(gdb) f 1
<br>
#1  0x7eacb46c in ?? ()
<br>
(gdb) set _dbg=0
<br>
No symbol table is loaded.  Use the &quot;file&quot; command.
<br>
(gdb) symbol-file /usr/local/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so
<br>
Reading symbols from 
<br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so.0.0.0...done.
<br>
(gdb) f 1
<br>
#1  0x7eacb46c in ?? ()
<br>
(gdb) set _dbg=0
<br>
No symbol &quot;_dbg&quot; in current context.
<br>
(gdb) f 2
<br>
#0  0x00000000 in ?? ()
<br>
(gdb) set _dbg=0
<br>
No symbol &quot;_dbg&quot; in current context.
<br>
(gdb) 
<br>
...
<br>
<p><p>With &quot;list&quot; I get source code from mpi_CartComm.c and not from mpi_MPI.c.
<br>
If a switch threads, &quot;list&quot; continues in the old file.
<br>
<p>(gdb) thread 1
<br>
[Switching to thread 1 (LWP 1)]
<br>
#0  0x7eadcb04 in ?? ()
<br>
(gdb) list 36
<br>
31          distributed under the License is distributed on an &quot;AS IS&quot; BASIS,
<br>
32          WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
<br>
33          See the License for the specific language governing permissions and
<br>
34          limitations under the License.
<br>
35      */
<br>
36      /*
<br>
37       * File         : mpi_CartComm.c
<br>
38       * Headerfile   : mpi_CartComm.h
<br>
39       * Author       : Sung-Hoon Ko, Xinying Li
<br>
40       * Created      : Thu Apr  9 12:22:15 1998
<br>
(gdb) thread 2
<br>
[Switching to thread 2 (LWP 12)]
<br>
#0  0x7eadcbb8 in ?? ()
<br>
(gdb) list
<br>
41       * Revision     : $Revision: 1.6 $
<br>
42       * Updated      : $Date: 2003/01/16 16:39:34 $
<br>
43       * Copyright: Northeast Parallel Architectures Center
<br>
44       *            at Syracuse University 1998
<br>
45       */
<br>
46      #include &quot;ompi_config.h&quot;
<br>
47      
<br>
48      #include &lt;stdlib.h&gt;
<br>
49      #ifdef HAVE_TARGETCONDITIONALS_H
<br>
50      #include &lt;TargetConditionals.h&gt;
<br>
(gdb) 
<br>
<p><p>Do you have any ideas, what's going wrong or if I must use a different
<br>
symbol table?
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;Hi Gilles,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I changed _dbg to a static variable, so that it is visible in the
</span><br>
<span class="quotelev2">&gt; &gt;library, but unfortunately still not in the symbol table.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;tyr java 419 nm /usr/local/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so | grep -i _dbg
</span><br>
<span class="quotelev2">&gt; &gt;[271]   |  1249644|     4|OBJT |LOCL |0    |18     |_dbg.14258
</span><br>
<span class="quotelev2">&gt; &gt;tyr java 420 /usr/local/gdb-7.6.1_64_gcc/bin/gdb
</span><br>
<span class="quotelev2">&gt; &gt;GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev2">&gt; &gt;...
</span><br>
<span class="quotelev2">&gt; &gt;(gdb) attach 13019
</span><br>
<span class="quotelev2">&gt; &gt;Attaching to process 13019
</span><br>
<span class="quotelev2">&gt; &gt;[New process 13019]
</span><br>
<span class="quotelev2">&gt; &gt;Retry #1:
</span><br>
<span class="quotelev2">&gt; &gt;Retry #2:
</span><br>
<span class="quotelev2">&gt; &gt;Retry #3:
</span><br>
<span class="quotelev2">&gt; &gt;Retry #4:
</span><br>
<span class="quotelev2">&gt; &gt;0x7eadcb04 in ?? ()
</span><br>
<span class="quotelev2">&gt; &gt;(gdb) symbol-file /usr/local/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so
</span><br>
<span class="quotelev2">&gt; &gt;Reading symbols from 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so.0.0.0...done.
<br>
<span class="quotelev2">&gt; &gt;(gdb) set var _dbg.14258=0
</span><br>
<span class="quotelev2">&gt; &gt;No symbol &quot;_dbg&quot; in current context.
</span><br>
<span class="quotelev2">&gt; &gt;(gdb) 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Kind regards
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Siegmar
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; unfortunately I didn't get anything useful. It's probably my fault,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; because I'm still not very familiar with gdb or any other debugger.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I did the following things.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1st window:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr java 174 setenv OMPI_ATTACH 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr java 175 mpijavac InitFinalizeMain.java 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; warning: [path] bad path element
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   &quot;/usr/local/openmpi-1.9.0_64_gcc/lib64/shmem.jar&quot;:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   no such file or directory
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 1 warning
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr java 176 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2nd window:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr java 379 ps -aef | grep java
</span><br>
<span class="quotelev3">&gt; &gt;&gt; noaccess  1345     1   0   May 22 ?         113:23 /usr/java/bin/java -server -Xmx128m 
</span><br>
-XX:+UseParallelGC 
<br>
<span class="quotelev2">&gt; &gt;-XX:ParallelGCThreads=4 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   fd1026  3661 10753   0 14:09:12 pts/14      0:00 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   fd1026  3677 13371   0 14:16:55 pts/2       0:00 grep java
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   fd1026  3663  3661   0 14:09:12 pts/14      0:01 java -cp 
</span><br>
<span class="quotelev2">&gt; &gt;/home/fd1026/work/skripte/master/parallel/prog/mpi/java:/usr/local/jun
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr java 380 /usr/local/gdb-7.6.1_64_gcc/bin/gdb
</span><br>
<span class="quotelev3">&gt; &gt;&gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (gdb) attach 3663
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Attaching to process 3663
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New process 3663]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Retry #1:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Retry #2:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Retry #3:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Retry #4:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 0x7eadcb04 in ?? ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (gdb) symbol-file /usr/local/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Reading symbols from 
</span><br>
/export2/prog/SunOS_sparc/openmpi-1.9.0_64_gcc/lib64/libmpi_java.so.0.0.0...done.
<br>
<span class="quotelev3">&gt; &gt;&gt; (gdb) set var _dbg=0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No symbol &quot;_dbg&quot; in current context.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (gdb) set var JNI_OnLoad::_dbg=0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No symbol &quot;_dbg&quot; in specified context.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (gdb) set JNI_OnLoad::_dbg=0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No symbol &quot;_dbg&quot; in specified context.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (gdb) info threads
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New LWP 12]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New LWP 11]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New LWP 10]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New LWP 9]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New LWP 8]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New LWP 7]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New LWP 6]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New LWP 5]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New LWP 4]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New LWP 3]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New LWP 2]
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   Id   Target Id         Frame 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   12   LWP 2             0x7eadc6b0 in ?? ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   11   LWP 3             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   10   LWP 4             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   9    LWP 5             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   8    LWP 6             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   7    LWP 7             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   6    LWP 8             0x7ead8b0c in ?? ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   5    LWP 9             0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   4    LWP 10            0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   3    LWP 11            0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   2    LWP 12            0x7eadcbb8 in ?? ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt; * 1    LWP 1             0x7eadcb04 in ?? ()
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (gdb) 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; It seems that &quot;_dbg&quot; is unknown and unavailable.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr java 399 grep _dbg /export2/src/openmpi-1.9/openmpi-dev-124-g91e9686/ompi/mpi/java/c/*
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /export2/src/openmpi-1.9/openmpi-dev-124-g91e9686/ompi/mpi/java/c/mpi_MPI.c:        volatile 
</span><br>
int _dbg = 1;
<br>
<span class="quotelev3">&gt; &gt;&gt; /export2/src/openmpi-1.9/openmpi-dev-124-g91e9686/ompi/mpi/java/c/mpi_MPI.c:        while 
</span><br>
(_dbg) poll(NULL, 0, 1);
<br>
<span class="quotelev3">&gt; &gt;&gt; tyr java 400 nm /usr/local/openmpi-1.9.0_64_gcc/lib64/*.so | grep -i _dbg
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr java 401 nm /usr/local/openmpi-1.9.0_64_gcc/lib64/*.so | grep -i JNI_OnLoad
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [1057]  |              139688|                 444|FUNC |GLOB |0    |11     |JNI_OnLoad
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr java 402 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; How can I set _dbg to zero to continue mpiexec? I also tried to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; set a breakpoint for function JNI_OnLoad, but it seems, that the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; function isn't called before SIGSEGV.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr java 177 unsetenv OMPI_ATTACH 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr java 178 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
</span><br>
<span class="quotelev3">&gt; &gt;&gt; GNU gdb (GDB) 7.6.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (gdb) b mpi_MPI.c:JNI_OnLoad
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No source file named mpi_MPI.c.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Make breakpoint pending on future shared library load? (y or [n]) y
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Breakpoint 1 (mpi_MPI.c:JNI_OnLoad) pending.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (gdb) run -np 1 java InitFinalizeMain 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Starting program: /usr/local/openmpi-1.9.0_64_gcc/bin/mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [New LWP    2        ]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=3518, tid=2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr java 381 cat InitFinalizeMain.java 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; import mpi.*;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; public class InitFinalizeMain
</span><br>
<span class="quotelev3">&gt; &gt;&gt; {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   public static void main (String args[]) throws MPIException
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     MPI.Init (args);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     System.out.print (&quot;Hello!\n&quot;);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     MPI.Finalize ();
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   }
</span><br>
<span class="quotelev3">&gt; &gt;&gt; }
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; SIGSEGV happens in MPI.Init(args), because I can print a message
</span><br>
<span class="quotelev3">&gt; &gt;&gt; before I call the method.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr java 192 unsetenv OMPI_ATTACH
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr java 193 mpijavac InitFinalizeMain.java
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr java 194 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Before MPI.Init()
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c7f0, pid=3697, tid=2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any ideas, how I can continue? I couldn't find a C function for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI.Init() in a C file. Do you know, which function is called first,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; so that I can set a breakpoint? By the way, I get the same error
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for Solaris 10 x86_64.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr java 388 ssh sunpc1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sunpc1 java 106 mpijavac InitFinalizeMain.java
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sunpc1 java 107 uname -a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; SunOS sunpc1 5.10 Generic_147441-21 i86pc i386 i86pc Solaris
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sunpc1 java 108 isainfo -k
</span><br>
<span class="quotelev3">&gt; &gt;&gt; amd64
</span><br>
<span class="quotelev3">&gt; &gt;&gt; sunpc1 java 109 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #  SIGSEGV (0xb) at pc=0xfffffd7fff1d77f0, pid=20256, tid=2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thank you very much for any help in advance.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; thank you very much for your help.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; how did you configure openmpi ? which java version did you use ?
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; i just found a regression and you currently have to explicitly add
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; CFLAGS=-D_REENTRANT CPPFLAGS=-D_REENTRANT
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt; &gt; to your configure command line
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I added &quot;-D_REENTRANT&quot; to my command.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ../openmpi-dev-124-g91e9686/configure --prefix=/usr/local/openmpi-1.9.0_64_gcc \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;   --libdir=/usr/local/openmpi-1.9.0_64_gcc/lib64 \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;   --with-jdk-bindir=/usr/local/jdk1.8.0/bin \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;   --with-jdk-headers=/usr/local/jdk1.8.0/include \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;   JAVA_HOME=/usr/local/jdk1.8.0 \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;   LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;   CFLAGS=&quot;-m64 -D_REENTRANT&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;   CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;   CPPFLAGS=&quot;-D_REENTRANT&quot; CXXCPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;   --enable-mpi-cxx \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;   --enable-cxx-exceptions \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;   --enable-mpi-java \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;   --enable-heterogeneous \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;   --enable-mpi-thread-multiple \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;   --with-threads=posix \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;   --with-hwloc=internal \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;   --without-verbs \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;   --with-wrapper-cflags=&quot;-std=c11 -m64&quot; \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;   --enable-debug \
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;   |&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_gcc
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I use Java 8.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; tyr openmpi-1.9 112 java -version
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; java version &quot;1.8.0&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Java(TM) SE Runtime Environment (build 1.8.0-b132)
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Java HotSpot(TM) 64-Bit Server VM (build 25.0-b70, mixed mode)
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; tyr openmpi-1.9 113 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Unfortunately I still get a SIGSEGV with openmpi-dev-124-g91e9686.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I have applied your patch and will try to debug my small Java
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; program tomorrow or next week and then let you know the result.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25581.php">http://www.open-mpi.org/community/lists/users/2014/10/25581.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25582.php">http://www.open-mpi.org/community/lists/users/2014/10/25582.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25585.php">Siegmar Gross: "Re: [OMPI users] OMPI users] which info is needed for SIGSEGV inJava foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Previous message:</strong> <a href="25583.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Maybe in reply to:</strong> <a href="25583.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25590.php">Kawashima, Takahiro: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
<li><strong>Reply:</strong> <a href="25590.php">Kawashima, Takahiro: "Re: [OMPI users] which info is needed for SIGSEGV in Java foropenmpi-dev-124-g91e9686on Solaris"</a>
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
