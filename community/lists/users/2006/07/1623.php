<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 14 12:35:15 2006" -->
<!-- isoreceived="20060714163515" -->
<!-- sent="Fri, 14 Jul 2006 09:35:08 -0700" -->
<!-- isosent="20060714163508" -->
<!-- name="Warner Yuen" -->
<!-- email="wyuen_at_[hidden]" -->
<!-- subject="[OMPI users] Problem compiling OMPI with Intel C compiler on Mac OS X" -->
<!-- id="958BBF05-C54B-4B9C-A500-47654F1EE997_at_apple.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Warner Yuen (<em>wyuen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-14 12:35:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1624.php">Eric Thibodeau: "[OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>Previous message:</strong> <a href="1622.php">Brock Palen: "Re: [OMPI users] BTL devices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1628.php">Brian Barrett: "Re: [OMPI users] Problem compiling OMPI with Intel C compiler on Mac OS X"</a>
<li><strong>Reply:</strong> <a href="1628.php">Brian Barrett: "Re: [OMPI users] Problem compiling OMPI with Intel C compiler on Mac OS X"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/08/1752.php">Peter Beerli: "Re: [OMPI users] Problem compiling OMPI with Intel C compiler on Mac OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm having trouble compiling Open MPI with Mac OS X v10.4.6 with the  
<br>
Intel C compiler. Here are some details:
<br>
<p>1) I upgraded to the latest versions of Xcode including GCC 4.0.1  
<br>
build 5341.
<br>
2) I installed the latest Intel update (9.1.027) as well.
<br>
3) Open MPI compiles fine with using GCC and IFORT.
<br>
4) Open MPI fails with ICC and IFORT
<br>
5) MPICH-2.1.0.3 compiles fine with ICC and IFORT (I just had to find  
<br>
out if my compiler worked...sorry!)
<br>
6) My Open MPI confguration was using: ./configure --with-rsh=/usr/ 
<br>
bin/ssh --prefix=/usr/local/ompi11icc
<br>
7) Should I have included my config.log?
<br>
<p>/opt/intel/cc/9.1.027/bin/icc -dynamiclib ${wl}-flat_namespace ${wl}- 
<br>
undefined ${wl}suppress -o .libs/libopal.0.0.0.dylib  class/.libs/ 
<br>
opal_free_list.o class/.libs/opal_hash_table.o class/.libs/ 
<br>
opal_list.o class/.libs/opal_object.o class/.libs/opal_atomic_lifo.o  
<br>
class/.libs/opal_value_array.o memoryhooks/.libs/memory.o  
<br>
runtime/.libs/opal_progress.o runtime/.libs/opal_finalize.o  
<br>
runtime/.libs/opal_init.o runtime/.libs/opal_params.o threads/.libs/ 
<br>
condition.o threads/.libs/mutex.o threads/.libs/thread.o  .libs/ 
<br>
libopal.lax/libltdlc.a/ltdl.o  .libs/libopal.lax/libasm.a/asm.o .libs/ 
<br>
libopal.lax/libasm.a/atomic-asm.o  .libs/libopal.lax/libevent.a/ 
<br>
event.o .libs/libopal.lax/libevent.a/kqueue.o .libs/libopal.lax/ 
<br>
libevent.a/select.o .libs/libopal.lax/libevent.a/signal.o  .libs/ 
<br>
libopal.lax/libmca_base.a/mca_base_close.o .libs/libopal.lax/ 
<br>
libmca_base.a/mca_base_cmd_line.o .libs/libopal.lax/libmca_base.a/ 
<br>
mca_base_component_compare.o .libs/libopal.lax/libmca_base.a/ 
<br>
mca_base_component_find.o .libs/libopal.lax/libmca_base.a/ 
<br>
mca_base_component_repository.o .libs/libopal.lax/libmca_base.a/ 
<br>
mca_base_components_close.o .libs/libopal.lax/libmca_base.a/ 
<br>
mca_base_components_open.o .libs/libopal.lax/libmca_base.a/ 
<br>
mca_base_list.o .libs/libopal.lax/libmca_base.a/ 
<br>
mca_base_msgbuf.o .libs/libopal.lax/libmca_base.a/ 
<br>
mca_base_open.o .libs/libopal.lax/libmca_base.a/ 
<br>
mca_base_param.o .libs/libopal.lax/libmca_base.a/ 
<br>
mca_base_parse_paramfile.o  .libs/libopal.lax/libopalutil.a/ 
<br>
argv.o .libs/libopal.lax/libopalutil.a/basename.o .libs/libopal.lax/ 
<br>
libopalutil.a/cmd_line.o .libs/libopal.lax/libopalutil.a/ 
<br>
convert.o .libs/libopal.lax/libopalutil.a/crc.o .libs/libopal.lax/ 
<br>
libopalutil.a/daemon_init.o .libs/libopal.lax/libopalutil.a/ 
<br>
error.o .libs/libopal.lax/libopalutil.a/few.o .libs/libopal.lax/ 
<br>
libopalutil.a/if.o .libs/libopal.lax/libopalutil.a/keyval_lex.o .libs/ 
<br>
libopal.lax/libopalutil.a/keyval_parse.o .libs/libopal.lax/ 
<br>
libopalutil.a/malloc.o .libs/libopal.lax/libopalutil.a/ 
<br>
numtostr.o .libs/libopal.lax/libopalutil.a/opal_environ.o .libs/ 
<br>
libopal.lax/libopalutil.a/opal_pty.o .libs/libopal.lax/libopalutil.a/ 
<br>
os_create_dirpath.o .libs/libopal.lax/libopalutil.a/os_path.o .libs/ 
<br>
libopal.lax/libopalutil.a/output.o .libs/libopal.lax/libopalutil.a/ 
<br>
path.o .libs/libopal.lax/libopalutil.a/pow2.o .libs/libopal.lax/ 
<br>
libopalutil.a/printf.o .libs/libopal.lax/libopalutil.a/qsort.o .libs/ 
<br>
libopal.lax/libopalutil.a/show_help.o .libs/libopal.lax/libopalutil.a/ 
<br>
show_help_lex.o .libs/libopal.lax/libopalutil.a/stacktrace.o .libs/ 
<br>
libopal.lax/libopalutil.a/strncpy.o .libs/libopal.lax/libopalutil.a/ 
<br>
trace.o  .libs/libopal.lax/libmca_maffinity.a/ 
<br>
maffinity_base_close.o .libs/libopal.lax/libmca_maffinity.a/ 
<br>
maffinity_base_open.o .libs/libopal.lax/libmca_maffinity.a/ 
<br>
maffinity_base_select.o .libs/libopal.lax/libmca_maffinity.a/ 
<br>
maffinity_base_wrappers.o  .libs/libopal.lax/libmca_memcpy.a/ 
<br>
memcpy_base_close.o .libs/libopal.lax/libmca_memcpy.a/ 
<br>
memcpy_base_open.o  .libs/libopal.lax/libmca_memory.a/ 
<br>
memory_base_close.o .libs/libopal.lax/libmca_memory.a/ 
<br>
memory_base_open.o  .libs/libopal.lax/libmca_memory_darwin.a/ 
<br>
memory_darwin_component.o  .libs/libopal.lax/libmca_paffinity.a/ 
<br>
paffinity_base_close.o .libs/libopal.lax/libmca_paffinity.a/ 
<br>
paffinity_base_open.o .libs/libopal.lax/libmca_paffinity.a/ 
<br>
paffinity_base_select.o .libs/libopal.lax/libmca_paffinity.a/ 
<br>
paffinity_base_wrappers.o  .libs/libopal.lax/libmca_timer.a/ 
<br>
timer_base_close.o .libs/libopal.lax/libmca_timer.a/ 
<br>
timer_base_open.o  .libs/libopal.lax/libmca_timer_darwin.a/ 
<br>
timer_darwin_component.o   -ldl  -Wl,-u -Wl,_munmap -Wl,- 
<br>
multiply_defined -Wl,suppress -install_name  /usr/local/ompi11icc/lib/ 
<br>
libopal.0.dylib -Wl,-compatibility_version -Wl,1 -Wl,-current_version  
<br>
-Wl,1.0
<br>
IPO link: can not find &quot;1&quot;
<br>
icc: error: problem during multi-file optimization compilation (code 1)
<br>
make[2]: *** [libopal.la] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>Warner Yuen
<br>
Research Computing Consultant
<br>
Apple Computer
<br>
email: wyuen_at_[hidden]
<br>
Tel: 408.718.2859
<br>
Fax: 408.715.0133
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1623/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1624.php">Eric Thibodeau: "[OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>Previous message:</strong> <a href="1622.php">Brock Palen: "Re: [OMPI users] BTL devices"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1628.php">Brian Barrett: "Re: [OMPI users] Problem compiling OMPI with Intel C compiler on Mac OS X"</a>
<li><strong>Reply:</strong> <a href="1628.php">Brian Barrett: "Re: [OMPI users] Problem compiling OMPI with Intel C compiler on Mac OS X"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/08/1752.php">Peter Beerli: "Re: [OMPI users] Problem compiling OMPI with Intel C compiler on Mac OS X"</a>
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
