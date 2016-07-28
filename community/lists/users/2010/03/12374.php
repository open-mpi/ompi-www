<?
$subject_val = "Re: [OMPI users] Signal code: Address not mapped (1) error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 17 12:42:44 2010" -->
<!-- isoreceived="20100317164244" -->
<!-- sent="Wed, 17 Mar 2010 09:42:36 -0700" -->
<!-- isosent="20100317164236" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Signal code: Address not mapped (1) error" -->
<!-- id="DC232CED-E1AF-4665-9241-C614DD5C71FD_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="d23942591003170611m36f56c03r8a8d360a4983cb3f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Signal code: Address not mapped (1) error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-17 12:42:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12375.php">Fernando Lemos: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Previous message:</strong> <a href="12373.php">Jeff Squyres: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>In reply to:</strong> <a href="12370.php">alev mutlu: "[OMPI users] Signal code: Address not mapped (1) error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12378.php">Dorian Krause: "Re: [OMPI users] Signal code: Address not mapped (1) error"</a>
<li><strong>Reply:</strong> <a href="12378.php">Dorian Krause: "Re: [OMPI users] Signal code: Address not mapped (1) error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;From the stack trace, it looks like the error is somewhere inside Boost.  I'm unfamiliar with the details of Boost -- you might want to ask them about it.
</span><br>
<p><p>On Mar 17, 2010, at 6:11 AM, alev mutlu wrote:
<br>
<p><span class="quotelev1">&gt; Hi the following codes compiles fine but gives some run time errors.
</span><br>
<span class="quotelev1">&gt; Ant suggestions to fix the problem. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Code
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/mpi/environment.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/mpi/communicator.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/mpi/collectives.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/thread/barrier.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/thread/mutex.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/config.hpp&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/archive/text_oarchive.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/archive/text_iarchive.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/serialization/access.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/serialization/string.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/mpi/skeleton_and_content.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/mpi/datatype.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/mpi/allocator.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/archive/tmpdir.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/serialization/utility.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/serialization/base_object.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/mpi.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/tokenizer.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/archive/tmpdir.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/archive/binary_oarchive.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/serialization/export.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/serialization/base_object.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/serialization/utility.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/serialization/hash_map.hpp&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;boost/serialization/map.hpp&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;string&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;vector&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;fstream&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define MASTER 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int arraySize = 7;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt; namespace mpi = boost::mpi;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; struct field {
</span><br>
<span class="quotelev1">&gt;     string field_name;
</span><br>
<span class="quotelev1">&gt;     string field_type;
</span><br>
<span class="quotelev1">&gt;     string field_ref;
</span><br>
<span class="quotelev1">&gt;     string field_colType;    
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; namespace boost {
</span><br>
<span class="quotelev1">&gt;     namespace serialization{
</span><br>
<span class="quotelev1">&gt;         template&lt;class Archive&gt;
</span><br>
<span class="quotelev1">&gt;         void serialize(Archive &amp; ar, struct field &amp; f,  unsigned int version){
</span><br>
<span class="quotelev1">&gt;             ar &amp; f.field_name;
</span><br>
<span class="quotelev1">&gt;             ar &amp; f.field_type;
</span><br>
<span class="quotelev1">&gt;             ar &amp; f.field_ref;
</span><br>
<span class="quotelev1">&gt;             ar &amp; f.field_colType;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[]) 
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     mpi::environment env(argc, argv);
</span><br>
<span class="quotelev1">&gt;     mpi::communicator world;
</span><br>
<span class="quotelev1">&gt;     int m_mySize, w_mySize, kk,i;    
</span><br>
<span class="quotelev1">&gt;     struct field *relAllValues;
</span><br>
<span class="quotelev1">&gt;     struct field *relMyValues;
</span><br>
<span class="quotelev1">&gt;     vector&lt;struct field&gt; C;
</span><br>
<span class="quotelev1">&gt;     struct field c;    
</span><br>
<span class="quotelev1">&gt;          
</span><br>
<span class="quotelev1">&gt;     w_mySize = arraySize / world.size();
</span><br>
<span class="quotelev1">&gt;     cout &lt;&lt; &quot;w_mySize = &quot; &lt;&lt; w_mySize &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;     if (world.rank() == MASTER){      
</span><br>
<span class="quotelev1">&gt;         for(int i = 0; i &lt; arraySize; i++){            
</span><br>
<span class="quotelev1">&gt;             c.field_name = &quot;field_name=&quot; ;
</span><br>
<span class="quotelev1">&gt;             c.field_type = &quot;field_type=&quot;;
</span><br>
<span class="quotelev1">&gt;             c.field_ref = &quot;field_ref=&quot;;
</span><br>
<span class="quotelev1">&gt;             c.field_colType = &quot;field_colType=&quot;;
</span><br>
<span class="quotelev1">&gt;             C.push_back(c);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;           m_mySize = arraySize / world.size() + arraySize % world.size();
</span><br>
<span class="quotelev1">&gt;         relMyValues = (struct field *) malloc(sizeof(struct field) * w_mySize);
</span><br>
<span class="quotelev1">&gt;         relAllValues = (struct field *) malloc(sizeof(struct field) * arraySize);
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;       else{
</span><br>
<span class="quotelev1">&gt;          relMyValues = (struct field *) malloc(sizeof(struct field) * w_mySize);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt;       if (world.rank() == MASTER){
</span><br>
<span class="quotelev1">&gt;           scatter(world, C, relMyValues, w_mySize, 0);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;       else{
</span><br>
<span class="quotelev1">&gt;           scatter(world, C, relMyValues, w_mySize, 0);
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the run time errors
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ceng34:00724] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [ceng34:00724] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [ceng34:00724] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [ceng34:00724] Failing at address: 0xfffffffffffffff8
</span><br>
<span class="quotelev1">&gt; [ceng34:00724] [ 0] /lib64/libpthread.so.0 [0x315880de80]
</span><br>
<span class="quotelev1">&gt; [ceng34:00724] [ 1] /usr/lib64/libstdc++.so.6(_ZN9__gnu_cxx18__exchange_and_addEPVii+0x2) [0x385dab7672]
</span><br>
<span class="quotelev1">&gt; [ceng34:00724] [ 2] /usr/lib64/libstdc++.so.6(_ZNSs6assignERKSs+0x9b) [0x385da9ca4b]
</span><br>
<span class="quotelev1">&gt; [ceng34:00724] [ 3] test-boost(_ZN5fieldaSERKS_+0x47) [0x42197f]
</span><br>
<span class="quotelev1">&gt; [ceng34:00724] [ 4] test-boost(_ZNSt6__copyILb0ESt26random_access_iterator_tagE4copyIPK5fieldPS3_EET0_T_S8_S7_+0x3c) [0x4221be]
</span><br>
<span class="quotelev1">&gt; [ceng34:00724] [ 5] test-boost(_ZSt10__copy_auxIPK5fieldPS0_ET0_T_S5_S4_+0x29) [0x422203]
</span><br>
<span class="quotelev1">&gt; [ceng34:00724] [ 6] test-boost(_ZNSt13__copy_normalILb0ELb0EE6copy_nIPK5fieldPS2_EET0_T_S7_S6_+0x25) [0x42222b]
</span><br>
<span class="quotelev1">&gt; [ceng34:00724] [ 7] test-boost(_ZSt4copyIPK5fieldPS0_ET0_T_S5_S4_+0x2d) [0x42225b]
</span><br>
<span class="quotelev1">&gt; [ceng34:00724] [ 8] test-boost(_ZN5boost3mpi6detail12scatter_implI5fieldEEvRKNS0_12communicatorEPKT_PS7_iiN4mpl_5bool_ILb0EEE+0x90) [0x42a630]
</span><br>
<span class="quotelev1">&gt; [ceng34:00724] [ 9] test-boost(_ZN5boost3mpi7scatterI5fieldEEvRKNS0_12communicatorEPKT_PS6_ii+0x50) [0x42b162]
</span><br>
<span class="quotelev1">&gt; [ceng34:00724] [10] test-boost(_ZN5boost3mpi7scatterI5fieldEEvRKNS0_12communicatorERKSt6vectorIT_SaIS7_EEPS7_ii+0x55) [0x42b1db]
</span><br>
<span class="quotelev1">&gt; [ceng34:00724] [11] test-boost(main+0x20e) [0x420880]
</span><br>
<span class="quotelev1">&gt; [ceng34:00724] [12] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3157c1d8b4]
</span><br>
<span class="quotelev1">&gt; [ceng34:00724] [13] test-boost(__gxx_personality_v0+0x169) [0x420489]
</span><br>
<span class="quotelev1">&gt; [ceng34:00724] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 724 on node ceng34-ib exited on signal 11 (Segmentation fault). 
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
<li><strong>Next message:</strong> <a href="12375.php">Fernando Lemos: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>Previous message:</strong> <a href="12373.php">Jeff Squyres: "Re: [OMPI users] Problem in remote nodes"</a>
<li><strong>In reply to:</strong> <a href="12370.php">alev mutlu: "[OMPI users] Signal code: Address not mapped (1) error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12378.php">Dorian Krause: "Re: [OMPI users] Signal code: Address not mapped (1) error"</a>
<li><strong>Reply:</strong> <a href="12378.php">Dorian Krause: "Re: [OMPI users] Signal code: Address not mapped (1) error"</a>
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
